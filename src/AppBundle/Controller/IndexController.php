<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use AppBundle\Entity\Event;
use AppBundle\Form\EventType;
use AppBundle\Entity\Device;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Route("/")
 */
class IndexController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction()
    {
      $em = $this->getDoctrine()->getManager();
      $devices = $em->getRepository('AppBundle:Device')->findAll();
      $events = $em->getRepository('AppBundle:Event')->findAll();

      return array(
          'devices' => $devices,
          'events'  => $events,
      );
    }
    /**
     * @Route("/sendEventsCurlPost", name="send_events_curl_post")
     * @Method("POST")
     */
    public function sendEventsCurlAction(Request $request)
    {
        $events =  $request->request->get('event_check_list');


        if (!empty($events)) {

          $em = $this->getDoctrine()->getManager();

          $qb = $em->createQueryBuilder();
          $qb->select('m');
          $qb->from('AppBundle:Event', 'm');
          $qb->where($qb->expr()->in('m.id', $events));

          //ArrayCollection
          $result = $qb->getQuery()->getResult();

          $events = array();
          $serializer = $this->container->get('jms_serializer');


          //
          $Devices = $em->getRepository('AppBundle:Device')->findAll();
          $devicesTokens = "";
          foreach ($Devices as $key => $value) {
            $devicesTokens =$devicesTokens.','. $Devices[$key]->getDeviceToken() ;

          }
          $devicesTokens = substr($devicesTokens,1);
          foreach ($result as $key => $value) {
            //$events [$key] =json_encode(array_values((array) $value),JSON_FORCE_OBJECT);
            $events [$key] = $value;
            //$events [$key] =json_encode($serializer->serialize($value, 'json'),JSON_FORCE_OBJECT);
          }

          $cmds = array();
          foreach ($events as $key => $value) {
            $cmds[$key] = '  curl -u 485d490dd0720a823c518fb6d39d73623ddff1f0487764a4: -H "Content-Type: application/json" -H "X-Ionic-Application-Id: 9cea62b6" https://push.ionic.io/api/v1/push -d \'{"tokens": ["'.$devicesTokens.'"],"production": false, "notification":{  "alert":"'.$events[$key]->__toString().'", "title": "operation","android": {"payload":""}, "ios": {"payload": ""}}}\' ';
            exec($cmds[$key] );
          }

          print_r($cmds);
          die;
          //$cmd='  curl -u 485d490dd0720a823c518fb6d39d73623ddff1f0487764a4: -H "Content-Type: application/json" -H "X-Ionic-Application-Id: 9cea62b6" https://push.ionic.io/api/v1/push -d \'{"tokens": ["DEV-1ec0a9ec-9437-4589-b809-5ed10ab4dcf4"],"production": false, "notification":{ "alert":"messageyyyyyyy", "title": "titleyyyy", "android": {"payload": {}}, "ios": {"payload": {}}}}\' ';
          //exec($cmd);

          $em = $this->getDoctrine()->getManager();
          $devices = $em->getRepository('AppBundle:Device')->findAll();

          $serializer = $this->container->get('jms_serializer');
          $response = new Response(json_encode($serializer->serialize($devices, 'json'))) ;
          $response->headers->set('Content-Type', 'application/json');
          return $response;

        }else {
          $response = new Response(json_encode(array('data' => '')));
          $response->headers->set('Content-Type', 'application/json');

          return $response;
        }
    }
    /**
     * @Route("/sendEventsPost", name="send_events_post")
     * @Method("POST")
     */
    public function eventSentAction(Request $request)
    {
        $events =  $request->request->get('event_check_list');


        if (!empty($events)) {

          $em = $this->getDoctrine()->getManager();

          $qb = $em->createQueryBuilder();
          $qb->select('m');
          $qb->from('AppBundle:Event', 'm');
          $qb->where($qb->expr()->in('m.id', $events));

          //ArrayCollection
          $result = $qb->getQuery()->getResult();

          $serializer = $this->container->get('jms_serializer');

          $response = new Response(json_encode($serializer->serialize($result, 'json') ) ) ;
          $response->headers->set('Content-Type', 'application/json');

          return $response;
        }else {
          $response = new Response(json_encode(array('data' => '')));
          $response->headers->set('Content-Type', 'application/json');

          return $response;
        }
      }

}

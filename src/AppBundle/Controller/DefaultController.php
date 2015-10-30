<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Event;
use Symfony\Component\Serializer\Serializer;

class DefaultController extends Controller
{
    /**
     * @Route("/sendEvents", name="send_events_get")
     * @Method("GET")
     * @Template("AppBundle:Admin:sendEvents.html.twig")
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
     * @Route("/sendEventsPost", name="send_events_post")
     * @Method("POST")
     */
    public function eventSentAction(Request $request)
    {
        $events =  $request->request->get('event_check_list');

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

    }
}

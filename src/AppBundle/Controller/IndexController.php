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

use Doctrine\Common\Collections\ArrayCollection;

class IndexController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction()
    {
      $em = $this->getDoctrine()->getManager();
      $Devices = $em->getRepository('AppBundle:Device')->findAll();
      $Events = $em->getRepository('AppBundle:Event')->findAll();
        return array(
                'Devices' => $Devices,
                'Events' => $Events
        );
    }
    /**
    * coté client :
    *var data = { 'user_ids[]' : []};
*$(":checked").each(function() {
*  data['user_ids[]'].push($(this).val());
*});
*$.post("ajax.php", data);
     * @Route("/send", name="send")
     * @Template()
     */
    public function sendAction(Request $request)
    {
      var_dump($request);
      return new JsonResponse('ok');
    }

}

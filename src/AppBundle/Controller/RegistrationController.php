<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use UserBundle\Entity\Device;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
/**
 * Event controller.
 *
 * @Route("/register")
 */
class RegistrationController extends Controller
{
    /**
     * @Route("/create")
     */
    public function createAction(Request $request)
    {
      $entity = new Device();
      
      $lastName =  $request->query->get('lastName');
      $firstName = $request->request->get('firstName');
      $email = $request->request->get('email');
      $deviceToken = $request->request->get('deviceToken');
      if(!empty($deviceToken) && !empty($email) ){
        $device = New Device();
        $device.setLastName($lastName);
        $device.setFirstName($firstName);
        $device.setEmail($email);
        $device.setDeviceToken($deviceToken);
        $em = $this->getDoctrine()->getManager();
        $em->persist($device);
        $em->flush();
        return new JsonResponse(array('registerResponse' => "ok"));
      }else {
        return new JsonResponse(array('registerResponse' => "nok"));
      }
    }
}

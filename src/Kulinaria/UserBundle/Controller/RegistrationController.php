<?php

namespace Kulinaria\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Kulinaria\UserBundle\Form\UserType;
use Kulinaria\UserBundle\Entity\User;

class RegistrationController extends Controller {
    
    public function registerAction(Request $request) {
        $user = new User();
        $form = $this->createForm(new UserType(), $user);
        $form->handleRequest($request);
        if($form->isValid()) {
            return $this->redirect($this->generateUrl('homepage'));
        }
        
        return $this->render('KulinariaUserBundle:Registration:registration.html.twig', array('form' => $form->createView()));
    }
}

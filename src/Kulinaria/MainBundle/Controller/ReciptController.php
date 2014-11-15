<?php

namespace Kulinaria\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Kulinaria\MainBundle\Form\ReciptType;


class ReciptController extends Controller
{
    public function addReciptAction(Request $request)
    {
        $form = $this->createForm(new ReciptType());
        
        $form->handleRequest($request);
        if($form->isValid()) {
            return $this->redirect($this->generateUrl('homepage'));
        } else {
            return $this->render('KulinariaMainBundle:Main:addrecipt.html.twig', array('form' => $form->createView()));
        }
    }

    public function showReciptsAction($page)
    {
        $maxPage = 7;
        if($page > 0 && $page <= $maxPage) {
            return $this->render('KulinariaMainBundle:Recipt:showRecipts.html.twig',
                array('page' => $page, 'maxPage' => $maxPage));
        }
        else {
            return new Response('Blad 404.');
        }
    }

}

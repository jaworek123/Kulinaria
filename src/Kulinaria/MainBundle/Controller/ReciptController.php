<?php

namespace Kulinaria\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Kulinaria\MainBundle\Form\Type\ReciptFormType;


class ReciptController extends Controller
{
    public function addReciptAction(Request $request)
    {
        if($this->getUser() != null) {
            $form = $this->createForm(new ReciptFormType());

            $form->handleRequest($request);
            if($form->isValid()) {
                return $this->redirect($this->generateUrl('homepage'));
            } else {
                return $this->render('KulinariaMainBundle:Recipt:addRecipt.html.twig', array('form' => $form->createView()));
            }
        } else {
            return $this->redirect($this->generateUrl('not_logged_in'));
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

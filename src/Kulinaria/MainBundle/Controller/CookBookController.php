<?php

namespace Kulinaria\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CookBookController extends Controller
{
    public function indexAction($page) {
        $maxPage = 7;
        if($page > 0 && $page <= $maxPage) {
            return $this->render('KulinariaMainBundle:CookBook:cookbook.html.twig',
                array('page' => $page, 'maxPage' => $maxPage));
        }
        else {
            return new Response('Blad 404.');
        }
    }
}

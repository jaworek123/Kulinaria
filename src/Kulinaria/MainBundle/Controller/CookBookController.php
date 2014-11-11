<?php

namespace Kulinaria\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CookBookController extends Controller
{
    public function indexAction($page) {
        return $this->render('KulinariaMainBundle:CookBook:cookbook.html.twig', array('page' => $page));
    }
}

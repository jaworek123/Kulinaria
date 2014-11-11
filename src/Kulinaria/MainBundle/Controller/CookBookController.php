<?php

namespace Kulinaria\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CookBookController extends Controller
{
    public function indexAction($page) {
        $maxPage = 7;
        return $this->render('KulinariaMainBundle:CookBook:cookbook.html.twig',
                array('page' => $page, 'maxPage' => $maxPage));
    }
}

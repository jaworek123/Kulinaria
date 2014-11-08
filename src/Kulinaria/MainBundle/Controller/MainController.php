<?php

namespace Kulinaria\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('KulinariaMainBundle:Main:index.html.twig');
    }
    
    public function cookBookAction() {
        return $this->render('KulinariaMainBundle:Main:cookbook.html.twig');
    }
    
    public function findReciptAction() {
        return $this->render('KulinariaMainBundle:Main:recipts.html.twig');
    }
}

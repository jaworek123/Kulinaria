<?php

namespace Kulinaria\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('KulinariaMainBundle:Main:index.html.twig');
    }
    
    public function przycisk1Action() {
        return $this->render('KulinariaMainBundle:Main:index2.html.twig');
    }
    
    public function przycisk2Action() {
        return $this->render('KulinariaMainBundle:Main:index3.html.twig');
    }
}

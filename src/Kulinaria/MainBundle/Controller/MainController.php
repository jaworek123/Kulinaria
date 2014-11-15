<?php

namespace Kulinaria\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('KulinariaMainBundle:Main:index.html.twig');
    }
    
    public function notLoggedInAction() {
        return $this->render('KulinariaMainBundle:Main:notLoggedIn.html.twig');
    }
}

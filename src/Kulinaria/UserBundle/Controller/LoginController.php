<?php

namespace Kulinaria\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
        return $this->render('KulinariaUserBundle:Login:index.html.twig');
    }
}

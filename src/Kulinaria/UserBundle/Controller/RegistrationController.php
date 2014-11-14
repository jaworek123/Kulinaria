<?php

namespace Kulinaria\UserBundle\Controller;

use FOS\UserBundle\Controller\RegistrationController as BaseController;

class RegistrationController extends BaseController {
    
    public function registerAction() {
        $response = parent::registerAction();
        
        return $response;
    }
}

<?php

namespace Kulinaria\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class KulinariaUserBundle extends Bundle
{
    public function getParent() {
        return 'FOSUserBundle';
    }
}

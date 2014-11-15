<?php

namespace Kulinaria\MainBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReciptControllerTest extends WebTestCase
{
    public function testAddrecipt()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addRecipt');
    }

    public function testShowrecipts()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showRecipts');
    }

}

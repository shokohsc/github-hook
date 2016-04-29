<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HookControllerTest extends WebTestCase
{
    public function testHook()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

}

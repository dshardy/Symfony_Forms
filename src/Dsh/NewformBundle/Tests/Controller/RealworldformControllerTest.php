<?php

namespace Dsh\NewformBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RealworldformControllerTest extends WebTestCase
{
    public function testRealworldform()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'Default:index.html.twig');
    }

}

<?php
/**
 * Created by PhpStorm.
 * User: vel-vet
 * Date: 23.07.18
 * Time: 14:56
 */
namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageContentControllerTest extends WebTestCase;
{
    public function testIndex()
    {
        $client=self::createClient();
        $crawler = $client->request('GET', '/');
        self::assertEquals(200, $client->getResponse()->getStatusCode());
        self::assertEquals(3, $crawler->filter('a')->count());
    }
        public function testContent()
    {
        $client=self::createClient();
        $crawler = $client->request('GET', '/content/2');
        self::assertEquals(2,  $crawler->filter('p')->count());
        self::assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
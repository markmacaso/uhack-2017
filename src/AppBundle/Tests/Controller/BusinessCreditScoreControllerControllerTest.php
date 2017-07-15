<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BusinessCreditScoreControllerControllerTest extends WebTestCase
{
    public function testReport()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'businesscreditscore/report');
    }

}

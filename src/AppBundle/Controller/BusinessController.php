<?php

namespace AppBundle\Controller;

use UnionBank\Api\Financial;

use AppBundle\Entity\Business;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/bus")
 */
class BusinessController extends Controller
{
    /**
     * @Route("/information", name="business-info")
     */
    public function informationAction(Request $request)
    {
        $financial_api = new Financial();

        $account1 = $financial_api->createTestAccount("Juan dela Cruz");
        $account2 = $financial_api->createTestAccount("Maria Santos");

        // replace this example code with whatever you need
        return $this->render('AppBundle::Business/information.html.twig', [
            'page_title' => 'Information',
            'account1' => $account1,
            'account2' => $account2,
        ]);
    }
}

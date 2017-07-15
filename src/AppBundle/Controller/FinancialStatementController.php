<?php

namespace AppBundle\Controller;

use AppBundle\Data\CashFlowData;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/financial-statement")
 */
class FinancialStatementController extends Controller
{
    /**
     * @Route("/", name="fs")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/cash-flow", name="fs-cash_flow")
     */
    public function cashFlowAction(Request $request)
    {
        $data = new CashFlowData();
        $data = $data->getData();
        // replace this example code with whatever you need
        return $this->render(
            'AppBundle::FinancialStatement/cash_flow.html.twig',
            ['page_title' => 'Cash Flow', 'data' => $data]
        );
    }
}

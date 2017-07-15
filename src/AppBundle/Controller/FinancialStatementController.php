<?php

namespace AppBundle\Controller;

use AppBundle\Data\CashFlowData;
use AppBundle\Data\ExpensesData;
use AppBundle\Data\SalesData;
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
            'AppBundle::FinancialStatement/financial_statement.html.twig',
            ['page_title' => 'Cash Flow', 'data' => $data, 'tab_name' => 'cash_flow']
        );
    }

    /**
     * @Route("/expenses", name="fs-expenses")
     */
    public function expensesAction(Request $request)
    {
        $data = new ExpensesData();
        $data = $data->getData();
        // replace this example code with whatever you need
        return $this->render(
            'AppBundle::FinancialStatement/financial_statement.html.twig',
            ['page_title' => 'Expenses', 'data' => $data, 'tab_name' => 'expenses']
        );
    }

    /**
     * @Route("/sales", name="fs-sales")
     */
    public function salesAction(Request $request)
    {
        $data = new SalesData();
        $data = $data->getData();
        // replace this example code with whatever you need
        return $this->render(
            'AppBundle::FinancialStatement/financial_statement.html.twig',
            ['page_title' => 'Sales', 'data' => $data, 'tab_name' => 'sales']
        );
    }

    /**
     * @Route("/reports", name="fs-reports")
     */
    public function reportsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(
            'AppBundle::FinancialStatement/financial_statement.html.twig',
            ['page_title' => 'Reports', 'tab_name' => 'reports']
        );
    }

    /**
     * @Route("/imports", name="fs-imports")
     */
    public function importsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(
            'AppBundle::FinancialStatement/financial_statement.html.twig',
            ['page_title' => 'Imports', 'tab_name' => 'imports']
        );
    }

}

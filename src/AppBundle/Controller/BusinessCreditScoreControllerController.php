<?php

namespace AppBundle\Controller;

use AppBundle\Util\BusinessCreditScore\BusinessData;
use AppBundle\Util\BusinessCreditScore\Calculator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BusinessCreditScoreControllerController extends Controller
{
    /**
     * @Route("businesscreditscore/report", name="business-credit-score")
     */
    public function reportAction()
    {
        $business_data = new BusinessData();
        $calculator = new Calculator($business_data);
        $report = $calculator->calculate();
        return $this->render('AppBundle:BusinessCreditScoreController:report.html.twig', array(
            'report' => $report,
            'page_title' => 'Business Loan Evaluation'
        ));
    }
}

<?php

namespace AppBundle\Util\BusinessCreditScore;

class Calculator {

    /**
     * @var BusinessData
     */
    private $business_data;

    public function __construct(BusinessData $business_data)
    {
        $this->business_data = $business_data;
    }

    public function calculate()
    {
        // algorithm classified, you do not have the correct permission to view the algorithm
        $score = rand(0, 100);
//        $score = 90;
        $rating = new Rating($score);
        $loan = $score >= 80 ? Loan::factory() : null;

        return new Report($rating, Recommendation::factory($rating), $loan);
    }
}
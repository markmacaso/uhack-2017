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
        return new Report(new Rating($score), Recommendation::factory());
    }
}
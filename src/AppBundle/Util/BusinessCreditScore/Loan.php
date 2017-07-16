<?php

namespace AppBundle\Util\BusinessCreditScore;

class Loan {
    private $max_loanable_amount;
    private $loan_term;

    public function __construct($max_loanable_amount, $loan_term)
    {
        $this->max_loanable_amount = $max_loanable_amount;
        $this->loan_term = $loan_term;
    }

    /**
     * @return mixed
     */
    public function getMaxLoanableAmount()
    {
        return $this->max_loanable_amount;
    }

    /**
     * @return mixed
     */
    public function getLoanTerm()
    {
        return $this->loan_term;
    }

    public static function factory()
    {
        $rands = [
            ['2,020,079.74', 5],
            ['1,414,055.82', 3],
            ['1,111,043.86', 5]
        ];

        $rand = rand(0, 2);
        return new self($rands[$rand][0], $rands[$rand][1]);
    }
}

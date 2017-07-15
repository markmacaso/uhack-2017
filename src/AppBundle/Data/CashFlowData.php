<?php

namespace AppBundle\Data;

use AppBundle\Entity\CashFlow;

class CashFlowData
{
    public function getData()
    {
        $cf1 = new CashFlow();
        $cf1->setAmount('300, 000');
        $cf1->setDateEntered(new \DateTime('2016-02-10'));
        $cf1->setDetails('Initial Investment');
        $cf1->setTypeOfSource('Loan');

        $cf2 = new CashFlow();
        $cf2->setAmount('50, 000');
        $cf2->setDateEntered(new \DateTime('2016-04-03'));
        $cf2->setDetails('Additional Investment');
        $cf2->setTypeOfSource('Personal');

        return [$cf1, $cf2];
    }
}

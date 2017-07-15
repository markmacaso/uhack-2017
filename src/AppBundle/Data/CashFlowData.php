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

        return [$cf1];
    }
}

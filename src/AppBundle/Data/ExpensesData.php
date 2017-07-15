<?php

namespace AppBundle\Data;

use AppBundle\Entity\Expense;

class ExpensesData
{
    public function getData()
    {
        $ex1 = new Expense();
        $ex1->setAmount('100, 000');
        $ex1->setDateOfExpense(new \DateTime('2016-02-10'));
        $ex1->setDetails('Purchase equipments needed for the business');
        $ex1->setTypeOfExpense('Capital Expense');

        $ex2 = new Expense();
        $ex2->setAmount('40, 000');
        $ex2->setDateOfExpense(new \DateTime('2016-02-18'));
        $ex2->setDetails('Payment for the initial investment loan');
        $ex2->setTypeOfExpense('Loan Payment');

        $ex3 = new Expense();
        $ex3->setAmount('30, 000');
        $ex3->setDateOfExpense(new \DateTime('2016-03-31'));
        $ex3->setDetails('Employees salary');
        $ex3->setTypeOfExpense('Utility Expense');

        $ex4 = new Expense();
        $ex4->setAmount('10, 000');
        $ex4->setDateOfExpense(new \DateTime('2016-03-31'));
        $ex4->setDetails('Water and Electricity');
        $ex4->setTypeOfExpense('Utility Expense');

        return [$ex1, $ex2, $ex3, $ex4];
    }
}

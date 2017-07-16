<?php

namespace AppBundle\Util\Helper;

class DropdownHelper
{
    public function getCashSources()
    {
        return [
            'personal' => 'Cash on hand',
            'loan' => 'Loan',
        ];
    }

    public function getPaymentModes()
    {
        return [
            'cash' => 'Cash',
            'credit' => 'Collectible',
        ];
    }

    public function getExpenseTypes()
    {
        return [
            'cost_of_sales' => 'Cost of sales',
            'utility' => 'Utility Expenses',
            'capital_expense' => 'Capital Expense',
            'loan_payment' => 'Loan Payment',
        ];
    }
}

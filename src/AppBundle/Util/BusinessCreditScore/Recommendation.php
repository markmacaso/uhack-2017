<?php

namespace AppBundle\Util\BusinessCreditScore;

class Recommendation {

    private $category;
    private $lead;
    private $details;

    public function __construct($category, $lead, $details)
    {
        $this->category = $category;
        $this->lead = $lead;
        $this->details = $details;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getLead()
    {
        return $this->lead;
    }

    public function getDetails()
    {
        return $this->details;
    }

    public static function factory(Rating $rating)
    {
        $recs = [];

        // dummy data
        $personal = [];
        $personal['id'] = new self(
            'Personal',
            'Valid IDs Missing',
                'Valid Identification Cards are needed to serve as your proof of identity.'
        );
        $personal['missed_payments'] = new self(
            'Personal',
            'Too Many Missed Payments',
            'You have too many missed payments. Banks may be hesitant to provide you with funding.'
        );
        $recs['Personal'] = $personal;

        $business = [];
        $business['tenure'] = new self(
            'Business',
            'Number of Years of Operation Not Met',
            'The business must be in operation for at least 3 years'
        );
        $business['itr'] = new self(
            'Business',
            'Missing Income Tax Return',
            'You need to provide Income Tax Return for the past 2 years. This will serve as your proof of income to give banks assurance that you\'re capable of making repayments;'
        );
        $business['bank_statement'] = new self(
            'Business',
            'Missing Bank Statements',
            'Bank statements for the last 6 months is an additional requirement for current business owners.'
        );
        $business['registration'] = new self(
            'Business',
            'Lacking Proof of Business Legality',
            'There is no proof that your company is legally registered. Get Registration documents from DTI or SEC will to serve as proof.'
        );
        $business['permit'] = new self(
            'Business',
            'No Proof of Right To Do Business',
            'Secure a copy of Mayor\'s Permit. This serves as proof that you have the right to do business'
        );
        $business['list'] = new self(
            'Business',
            'List of Customers and Suppliers Required',
            ''
        );
        $business['income_unstable'] = new self(
            'Business',
            'Income Sources Not Stable',
            ''

        );
        $business['credit_ratio_below_50'] = new self(
            'Business',
            'Debt To Income Ratio is High',
            'Based on your audited financial statements, your debt to income ration is more than 50%. This is your monthly financial liabilities (except mortgage) divided by your total monthly income. This reduces your chances of getting approved for loans with favorable terms.'

        );
        $business['credit_ratio_near_50'] = new self(
            'Business',
            'Debt To Income Ratio is Moderate',
            'Based on your audited financial statements, your debt to income ration is near 50%. This is your monthly financial liabilities (except mortgage) divided by your total monthly income. The higher the percentage, the lesser chance of getting approved for loans with favorable terms.'

        );
        $recs['Business'] = $business;

        $cash_flow = [];
        $cash_flow['inadequate'] = new self(
            'Cash Flow',
            'Inadequate Cash Flow',
            'Banks, or lenders in general, want to make sure that you are capable of repaying your loan each month, on-top of being able to cover rent, payroll, inventory, and other expenses. So, if you’re spending more money each month then what’s coming, then you need to solve that cash flow problem.
    The easiest ways to solve any cash flow issues is to invoice promptly, instituted late fees, have an emergency fund, and cut unnecessary expenses.'
        );
        $recs['Cash Flow'] = $cash_flow;

        $collateral = [];
        $collateral['limited'] = new self(
            'Collateral',
            'Limited Collateral',
            'Lenders typically aren’t willing to risk lending money to businesses without some sort of promise of reimbursement. In other words, they want physical property that they can take if a loan is not repaid. Create a collateral document that lists everything you can put-up as collateral. You can include both business and personal assets since your business may not have the real estate or equipment to offer as collateral. In that case, you may have to offer your home or car as collateral. '
        );
        $collateral['documents'] = new self(
            'Collaterial',
            'Insufficient Supporting Documents',
            'You need to have documents related to the collateral.'
        );
        $recs['Collateral'] = $collateral;

        if ($rating->getScore() >= 90) {
            return [new self('Business', 'Excellent Debt to Income Ratio', 'Your debt to income ratio is at minimum. This means that you are a good borrower and mostly likely be approved by the bank.')];
        } elseif ($rating->getScore() >= 80) {
            return [new self('Collateral', 'Sufficient Collateral Value', 'The propertie(s) you listed as collateral are not depreciating and in good value.')];
        } elseif ($rating->getScore() >= 50) {
            return [$recs['Collateral']['documents'], $recs['Business']['credit_ratio_near_50']];
        } elseif ($rating->getScore() >= 20) {
            // return all
            $recommendations = [];
            foreach ($recs as $cat => $cat_recs) {
                foreach ($cat_recs as $cat_rec) {
                    $recommendations[] = $cat_rec;
                }
            }
            return $recommendations;
        } else {
            // return all
            $recommendations = [];
            foreach ($recs as $cat => $cat_recs) {
                foreach ($cat_recs as $cat_rec) {
                    $recommendations[] = $cat_rec;
                }
            }
            return $recommendations;
        }


        $recommendations = [];
        foreach ($recs as $cat => $cat_recs) {
            foreach ($cat_recs as $cat_rec) {
                $recommendations[] = $cat_rec;
            }
        }
        return $recommendations;
    }
}

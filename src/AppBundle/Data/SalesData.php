<?php

namespace AppBundle\Data;

use AppBundle\Entity\Sale;

class SalesData
{
    public function getData()
    {
        $sales = [];

        $sale = new Sale();
        $sale->setAmount('30, 000');
        $sale->setDateOfSale(new \DateTime('2016-02-15'));
        $sale->setDetails('Sales');
        $sale->setPaymentMode('Cash');
        $sales[] = $sale;

        $sale = new Sale();
        $sale->setAmount('15, 000');
        $sale->setDateOfSale(new \DateTime('2016-02-19'));
        $sale->setDetails('Sales');
        $sale->setPaymentMode('Cash');
        $sales[] = $sale;

        $sale = new Sale();
        $sale->setAmount('120, 000');
        $sale->setDateOfSale(new \DateTime('2016-02-22'));
        $sale->setDetails('Sales');
        $sale->setPaymentMode('Cash');
        $sales[] = $sale;

        $sale = new Sale();
        $sale->setAmount('45, 000');
        $sale->setDateOfSale(new \DateTime('2016-02-27'));
        $sale->setDetails('Sales');
        $sale->setPaymentMode('Collectible');
        $sales[] = $sale;

        return $sales;
    }
}

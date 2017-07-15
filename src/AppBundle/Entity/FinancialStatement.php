<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Business;
use AppBundle\Entity\CashFlow;
use AppBundle\Entity\Expense;
use AppBundle\Entity\Sale;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="financial_statements")
 */
class FinancialStatement
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="financial_statements_seq", initialValue=1, allocationSize=1)
     */
    private $id;
    /**
     * @ORM\Column(name="type_of_period", type="string", length=255, nullable=false)
     */
    private $typeOfPeriod;
    /**
     * @ORM\Column(name="startDate", type="date", nullable=false)
     */
    private $startDate;
    /**
     * @ORM\Column(name="endDate", type="date", nullable=false)
     */
    private $endDate;
    /**
     * A business can have many financial statements
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Business", inversedBy="financialStatements")
     * @ORM\JoinColumn(name="business_id", referencedColumnName="id")
     */
    private $business;
    /**
      * A financial statement can have multiple cash flow entries
      * @ORM\OneToMany(targetEntity="AppBundle\Entity\CashFlow", mappedBy="financialStatement")
      * @ORM\OrderBy({"dateEntered" = "DESC"})
      */
    private $cashFlows;
    /**
      * A financial statement can have multiple sale entries
      * @ORM\OneToMany(targetEntity="AppBundle\Entity\Sale", mappedBy="financialStatement")
      * @ORM\OrderBy({"dateOfSale" = "DESC"})
      */
    private $sales;
    /**
      * A financial statement can have multiple expense entries
      * @ORM\OneToMany(targetEntity="AppBundle\Entity\Expense", mappedBy="financialStatement")
      * @ORM\OrderBy({"dateOfExpense" = "DESC"})
      */
    private $expenses;
    /**
      * @ORM\Column(type="datetime", nullable=true)
      */
    private $added_at;
    /**
      * @ORM\Column(type="datetime", nullable=true)
      */
    private $updated_at;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($date)
    {
        $this->startDate = $date;

        return $this;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($date)
    {
        $this->endDate = $date;

        return $this;
    }

    public function getBusiness()
    {
        return $business;
    }

    public function setBusiness($business)
    {
        $this->business = $business;

        return $this;
    }

    public function getCashFlows()
    {
        return $this->cashFlows;
    }

    public function getSales()
    {
        return $this->sales;
    }

    public function getExpenses()
    {
        return $this->expenses;
    }

    public function getAddedAt()
    {
        return $this->added_at;
    }

    public function setAddedAt($datetime)
    {
        $this->added_at = $datetime;

        return $this;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function setUpdatedAt($datetime)
    {
        $this->updated_at = $datetime;

        return $this;
    }
}

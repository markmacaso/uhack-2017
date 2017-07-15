<?php

namespace AppBundle\Entity;

use AppBundle\Entity\FinancialStatement;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="expenses")
 */
class Expense
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="expenses_seq", initialValue=1, allocationSize=1)
     */
    private $id;
    /**
     * A financial statement can have many expense entries
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\FinancialStatement", inversedBy="expenses")
     * @ORM\JoinColumn(name="financial_statement_id", referencedColumnName="id")
     */
    private $financialStatement;
    /**
     * @ORM\Column(type="float", nullable=false)
     */
    private $amount;
    /**
     * @ORM\Column(name="date_of_expense", type="date", nullable=true)
     */
    private $dateOfExpense;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $details;
    /**
     * @ORM\Column(name="type_of_expense", type="string", length=255, nullable=false)
     */
    private $typeOfExpense;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $documents;
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

    public function getFinancialStatement()
    {
        return $this->financialStatement;
    }

    public function setFinancialStatement($financialStatement)
    {
        $this->$financialStatement = $$financialStatement;

        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function getDateOfExpense()
    {
        return $this->dateOfExpense;
    }

    public function setDateOfExpense($date)
    {
        $this->dateOfExpense = $date;

        return $this;
    }

    public function getDetails()
    {
        return $this->details;
    }

    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    public function getTypeOfExpense()
    {
        return $this->typeOfExpense;
    }

    public function setTypeOfExpense($type)
    {
        $this->typeOfExpense = $type;

        return $this;
    }

    public function getDocuments()
    {
        return $this->documents;
    }

    public function setDocuments($documents)
    {
        $this->documents = $documents;

        return $this;
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

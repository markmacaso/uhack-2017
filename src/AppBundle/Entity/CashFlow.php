<?php

namespace AppBundle\Entity;

use AppBundle\Entity\FinancialStatement;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cash_flows")
 */
class CashFlow
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cash_flow_seq", initialValue=1, allocationSize=1)
     */
    private $id;
    /**
     * A financial statement can have many cash flow entries
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\FinancialStatement", inversedBy="cashFlows")
     * @ORM\JoinColumn(name="financial_statement_id", referencedColumnName="id")
     */
    private $financialStatement;
    /**
     * @ORM\Column(type="float", nullable=false)
     */
    private $amount;
    /**
     * @ORM\Column(name="date_entered", type="date", nullable=true)
     */
    private $dateEntered;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $details;
    /**
     * @ORM\Column(name="type_of_source", type="string", length=255, nullable=false)
     */
    private $typeOfSource;
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

    public function getDateEntered()
    {
        return $this->dateEntered;
    }

    public function setDateEntered($date)
    {
        $this->dateEntered = $date;

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

    public function getTypeOfSource()
    {
        return $this->typeOfSource;
    }

    public function setTypeOfSource($source)
    {
        $this->typeOfSource = $source;

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

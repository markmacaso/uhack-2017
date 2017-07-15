<?php

namespace AppBundle\Entity;

use AppBundle\Entity\FinancialStatement;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="businesses")
 */
class Business
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="business_seq", initialValue=1, allocationSize=1)
     */
    private $id;
    /**
      * A business can have multiple financial statements
      * @ORM\OneToMany(targetEntity="AppBundle\Entity\FinancialStatement", mappedBy="business")
      * @ORM\OrderBy({"added_at" = "DESC"})
      */
    private $financialStatements;
    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $name;
    /**
     * @ORM\Column(name="nature_of_business", type="string", length=255, nullable=false)
     */
    private $natureOfBusiness;
    /**
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;
    /**
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $city;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $state;
    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $country;
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

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getNatureOfBusiness()
    {
        return $this->natureOfBusiness;
    }

    public function setNatureOfBusiness($nature)
    {
        $this->natureOfBusiness = $nature;

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

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;

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

<?php

namespace AppBundle\Entity\User;

use Doctrine\ORM\Mapping as ORM;

/**
 * Occupation
 *
 * @ORM\Table(name="user_occupation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\User\OccupationRepository")
 */
class Occupation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="employerbusinessname", type="string", length=255)
     */
    private $employerbusinessname;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="text")
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="naturebusiness", type="string", length=255)
     */
    private $naturebusiness;

    /**
     * @var int
     *
     * @ORM\Column(name="yearsemployerbusiness", type="integer")
     */
    private $yearsemployerbusiness;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text")
     */
    private $address;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_current", type="boolean")
     */
    private $isCurrent;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Occupation
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set employerbusinessname
     *
     * @param string $employerbusinessname
     *
     * @return Occupation
     */
    public function setEmployerbusinessname($employerbusinessname)
    {
        $this->employerbusinessname = $employerbusinessname;

        return $this;
    }

    /**
     * Get employerbusinessname
     *
     * @return string
     */
    public function getEmployerbusinessname()
    {
        return $this->employerbusinessname;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Occupation
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set naturebusiness
     *
     * @param string $naturebusiness
     *
     * @return Occupation
     */
    public function setNaturebusiness($naturebusiness)
    {
        $this->naturebusiness = $naturebusiness;

        return $this;
    }

    /**
     * Get naturebusiness
     *
     * @return string
     */
    public function getNaturebusiness()
    {
        return $this->naturebusiness;
    }

    /**
     * Set yearsemployerbusiness
     *
     * @param integer $yearsemployerbusiness
     *
     * @return Occupation
     */
    public function setYearsemployerbusiness($yearsemployerbusiness)
    {
        $this->yearsemployerbusiness = $yearsemployerbusiness;

        return $this;
    }

    /**
     * Get yearsemployerbusiness
     *
     * @return int
     */
    public function getYearsemployerbusiness()
    {
        return $this->yearsemployerbusiness;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Occupation
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set isCurrent
     *
     * @param boolean $isCurrent
     *
     * @return Occupation
     */
    public function setIsCurrent($isCurrent)
    {
        $this->isCurrent = $isCurrent;

        return $this;
    }

    /**
     * Get isCurrent
     *
     * @return bool
     */
    public function getIsCurrent()
    {
        return $this->isCurrent;
    }
}


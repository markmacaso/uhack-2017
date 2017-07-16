<?php

namespace AppBundle\Util\BusinessCreditScore;

class Report {

    /**
     * @var Rating
     */
    private $rating;
    /**
     * @var array
     */
    private $recommendations;
    private $loan;

    public function __construct(Rating $rating, array $recommendations, $loan)
    {

        $this->rating = $rating;
        $this->recommendations = $recommendations;
        $this->loan = $loan;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function getRecommendations()
    {
        return $this->recommendations;
    }

    public function getLoan()
    {
        return $this->loan;
    }
}

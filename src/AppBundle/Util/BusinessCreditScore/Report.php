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

    public function __construct(Rating $rating, array $recommendations)
    {

        $this->rating = $rating;
        $this->recommendations = $recommendations;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function getRecommendations()
    {
        return $this->recommendations;
    }
}

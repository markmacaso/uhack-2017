<?php

namespace AppBundle\Util\BusinessCreditScore;

class Rating {

    private $score;
    /**
     * @var string
     */
    private $type;

    public function __construct($score, $type = 'confidence')
    {
        $this->score = $score;
        $this->type = $type;
    }

    private $confidence_score = [
        90 => 'very high confidence',
        80 => 'high confidence',
        50 => 'medium confidence',
        20 => 'low confidence',
        0 => 'very low confidence'
    ];

    private $confidence_colors = [
        90 => '#10CFBD',
        80 => '#48B0F7',
        50 => '#F8D053',
        20 => '#F55753',
        0 => '#6D5CAE'
    ];

    private $likability_score = [
        99 => 'virtually certain',
        90 => 'very likely',
        66 => 'likely',
        33 => 'about as likely as not',
        10 => 'unlikely',
        1 => 'very unlikely',
        0 => 'exceptionally unlikely'
    ];

    public function getScore()
    {
        return $this->score;
    }

    public function getColor()
    {
        $colors = "{$this->type}_colors";
        $rating = $this->$colors;
        foreach ($rating as $score => $color) {
            if ($this->score >= $score) {
                return $color;
            }
        }

        return array_pop($rating);
    }

    public function getMaxScore()
    {
        return 100.0;
    }

    public function getDescription()
    {
        $type = "{$this->type}_score";
        $rating = $this->$type;
        foreach ($rating as $score => $description) {
            if ($this->score >= $score) {
                return ucwords($description);
            }
        }

        return ucwords(array_pop($rating));
    }
}

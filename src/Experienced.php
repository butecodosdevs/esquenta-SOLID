<?php

namespace Chorume\Solid;

class Experienced extends SetBonus
{
    public function __construct($hourly_rate, $hours_worked){
        parent::__construct("Experienced", $hourly_rate, $hours_worked);
    }

    public function getBonus()
    {
        return 5;
    }
}

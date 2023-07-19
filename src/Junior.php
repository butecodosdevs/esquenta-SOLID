<?php

namespace Chorume\Solid;

class Junior extends SetBonus
{
    public function __construct($hourly_rate, $hours_worked){
        parent::__construct("Junior", $hourly_rate, $hours_worked);
    }
    public function getBonus()
    {
        return 10;
    }
}

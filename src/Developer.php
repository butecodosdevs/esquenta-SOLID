<?php

namespace Chorume\Solid;

class Developer
{

    public $level;
    public $hourly_rate;
    public $hours_worked;
    function __construct($level, $hourly_rate, $hours_worked)
    {
        $this->level = $level;
        $this->hourly_rate = $hourly_rate;
        $this->hours_worked = $hours_worked;
    }
}

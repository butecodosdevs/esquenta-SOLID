<?php

namespace Chorume\Solid;

abstract class SetBonus extends Developer{
    

    public function calculateBonus()
    {
        return ($this->hourly_rate * $this->hours_worked * $this->getBonus()) / 100;
    }

    abstract function getBonus();
}
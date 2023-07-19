<?php

namespace Chorume\Solid;

use PhpParser\Error;

class Senior extends Developer
{
    public function __construct($hourly_rate, $hours_worked)
    {
        parent::__construct("Senior", $hourly_rate, $hours_worked);
    }
}

<?php

namespace Chorume\Solid;

class Payments
{
    protected $developers;
    protected $message;

    public function __construct(MessageData $messageData)
    {
        $this->developers = [];
        $this->message = $messageData;
    }

    public function addDevelopers(Developer $developer)
    {
        array_push($this->developers, $developer);
    }

    public function getBonus()
    {
        $bonus = 0;
        foreach ($this->developers as $developer) {
            if ($developer instanceof SetBonus) {
                $bonus += $developer->calculateBonus();
            }
        }
        return $bonus;
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->developers as $developer) {
            $total += $developer->hourly_rate * $developer->hours_worked;
        }
        return $total;
    }

    public function printMessage($lang)
    {
        $message = $this->message->read($lang);
        return str_replace(["{total}", "{bonus}"], [$this->getTotal(), $this->getBonus()], $message);
    }
}

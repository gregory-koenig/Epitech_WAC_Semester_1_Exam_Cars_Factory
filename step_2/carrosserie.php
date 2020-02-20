<?php

class Carrosserie
{
    private $state;

    /**
     * State = 0 good // State = 1 can't drive
     */

    public function __construct()
    {
        $this->state = 0;
    }

    public function changeState($state)
    {
        $this->state = $state;
        if ($state == 1)
            echo "Carrosserie endommagée.\n";
        else if ($state == 0)
            echo "Carrosserie réparée.\n";
    }

    public function getState()
    {
        return $this->state;
    }
}
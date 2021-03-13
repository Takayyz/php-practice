<?php

class UnionTypes {
    /**
     * @var int|float
     */
    public $number;

    public function setNumber(int|float $number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }
}
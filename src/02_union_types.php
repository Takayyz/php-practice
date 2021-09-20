<?php

class UnionTypes {
    /**
     * @var int|float
     */
    public int|float $number;

    /**
    * @param int|float $number
    * @return void
    */
    public function setNumber(int|float $number): void
    {
        $this->number = $number;
    }

    /**
    * @return int|float
    */
    public function getNumber(): int|float
    {
        return $this->number;
    }
}

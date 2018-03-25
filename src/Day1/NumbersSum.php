<?php

namespace Day1;

class NumbersSum
{
    public function CountSum(int $number)
    {
        $sum = $number * ($number + 1) / 2;
        return $sum;
    }
}

$counter = new NumbersSum();
echo $counter->CountSum(100);
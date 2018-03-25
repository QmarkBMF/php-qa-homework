<?php

namespace Tests\Day1;

use Day1\NumbersSum;
use PHPUnit\Framework\TestCase;

class NumbersSumTest extends TestCase
{
    private $counter;

    public function setUp()
    {
        $this->counter = new NumbersSum();
    }

    public function test_count_to_3()
    {
        $this->assertEquals(6, $this->counter->CountSum(3));
    }

    public function test_count_to_100()
    {
        $this->assertEquals(5050, $this->counter->CountSum(100));
    }

    public function test_count_to_101()
    {
        $this->assertEquals(5151, $this->counter->CountSum(101));
    }
}

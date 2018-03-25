<?php

namespace Tests\Day1;

use Day1\ReverseString;
use PHPUnit\Framework\TestCase;

class ReverseStringTest extends TestCase
{
    private $reverter;

    public function setUp()
    {
        $this->reverter = new ReverseString();
    }

    public function test_for_short_string()
    {
        $this->assertEquals("ytrewq", $this->reverter->Reverse("qwerty"));
    }
    
    public function test_for_long_string()
    {
        $this->assertEquals("0987654321poiuytrewq", $this->reverter->Reverse("qwertyuiop1234567890"));
    }

    public function test_for_empty_string()
    {
        $this->assertEquals("", $this->reverter->Reverse(""));
    }
}
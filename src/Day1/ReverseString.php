<?php

namespace Day1;

class ReverseString
{
    // public function Reverse(string $input)
    // {
    //     $reversedInput = strrev($input);
    //     return $reversedInput;
    // }

    public function Reverse(string $input)
    {
        $reversedInput = "";

        foreach (str_split($input) as $char)
        {
            $reversedInput = $char.$reversedInput;
        }
        return $reversedInput;
    }
}

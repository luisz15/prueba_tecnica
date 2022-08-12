<?php

namespace App\Service;

class FizzBuzzGenerator
{
    public function getFizzBuzz(int $startingNumber, int $endingNumber): string
    {
        $result = "";
        for ($i=$startingNumber; $i <= $endingNumber; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                $result .= "FizzBuzz";
            } else if ($i % 3 === 0) {
                $result .= "Fizz";
            } else if ($i % 5 === 0) {
                $result .= "Buzz";
            } else {
                $result .= $i;
            }
            if ($i + 1 <= $endingNumber) {
                $result .= ", ";
            }
        }
        return $result;
    }
}

<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class Desafio1Extension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/3.x/advanced.html#automatic-escaping
            new TwigFilter('desafio1_fizzbuzz', [$this, 'desafio1_fizz_buzz']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('desafio1_fizzbuzz', [$this, 'desafio1_fizz_buzz']),
        ];
    }

    public function desafio1_fizz_buzz($startNumber)
    {
        $result = "";
        if (empty($startNumber)) {
            return $result;
        }
        $maxNumber = $startNumber + 30;
        for ($i=$startNumber; $i < $maxNumber; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                $result .= "FizzBuzz";
            } else if ($i % 3 === 0) {
                $result .= "Fizz";
            } else if ($i % 5 === 0) {
                $result .= "Buzz";
            } else {
                $result .= $i;
            }
            if ($i + 1 < $maxNumber) {
                $result .= ", ";
            }
        }
        return $result;
    }
}

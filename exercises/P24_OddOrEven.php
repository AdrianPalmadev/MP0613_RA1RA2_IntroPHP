<?php

class P24_OddOrEven
{
    public function main(): void
    {
        // Write your code here
        echo "Give a number: \n";
        
        $number = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($number % 2 == 0) {
            echo "Number is even.\n";
        } else {
            echo "Number is odd.\n";
        }
    }
}

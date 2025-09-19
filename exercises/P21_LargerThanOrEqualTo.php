<?php

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
        echo "Give the first number: \n";
        // Get input from the user
        $number1 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        // Prompt the user for input
        echo "Give the second number: \n";
        // Get input from the user
        $number2 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        // Check year value
        if ($number1 > $number2) {
            echo "Greater number is: " . $number1 . "\n";
        } else if ($number2 > $number1) {
            echo "Greater number is: " . $number2 . "\n";
        } else {
            echo "The numbers are equal!\n";
        }
    }
}

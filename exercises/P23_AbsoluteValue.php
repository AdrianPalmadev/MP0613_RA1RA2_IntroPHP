<?php

class P23_AbsoluteValue
{
    public function main(): void
    {
        // Write your code here
       $number = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

         if ($number < 0) {
              $absoluteValue = -$number;
         } else {
              $absoluteValue = $number;
         }

         echo $absoluteValue . "\n";
    }
}

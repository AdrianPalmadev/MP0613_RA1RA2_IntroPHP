<?php

class P22_GradesAndPoints
{
    public function main(): void
    {
        // Write your code here

        echo "Give points [0-100]: \n";

        $points = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($points < 0) {
            echo "impossible!\n";
        } else if ($points < 50) {
            echo "failed\n";
        } else if ($points < 60) {
            echo "Grade: 1\n";
        } else if ($points < 70) {
            echo "Grade: 2\n";
        } else if ($points < 80) {
            echo "Grade: 3\n";
        } else if ($points < 90) {
            echo "Grade: 4\n";
        } else if ($points > 100) {
            echo "incredible!\n";
        } else {
            echo "Grade: 5\n";
        }
    }
}

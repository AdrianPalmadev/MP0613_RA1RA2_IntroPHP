<?php

use function PHPUnit\Framework\equalTo;

class P25_Password
{
    public function main(): void
    {
        // Write your code here
        echo "Password?\n";

        $password = trim(string: fgets(stream: $GLOBALS['STDIN'] ?? STDIN));

        if ($password === "Caput Draconis") {
            echo "Welcome!\n";
        } else {
            echo "Off with you!\n";
        }
    }
}

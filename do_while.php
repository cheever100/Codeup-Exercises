<?php

$a = 0;
do {
    echo "{$a}\n";
    $a+=2;
} while ($a <= 100);

// Alter your loop to count backwards by 5's from 100 to -10.

$a = 100;
do {
    echo "{$a}\n";
    $a+=-5;
} while ($a >= -10);

// Create a do-while loop that starts at 2, and displays the result $a * $a on each line
$a = 2;
do {
    echo "$a\n";
    $a = $a * $a;
} while ($a < 1000000);

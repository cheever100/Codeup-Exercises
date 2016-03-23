<?php

$a = 5;
$b = 10;
$c = '10';

// TODO: Shorten these two if statements to a single if/else
$a = 5;
$b = 10;
$c = '10';
if ($a < $b) {
	echo "$a is less than $b";
} 
	else {
		echo "$a is greater than or equal to $b\n";
	}

$a = 5;
$b = 10;
$c = '10';
echo $a < $b ? "$a is less than $b\n" : "$a is greater than or equal to $b\n";



// TODO: Shorten these two if statements to a single if/else
if ($b < $c) {
    echo "$b is less than $c\n";
}
if ($b >= $c) {
    echo "$b is greater than or equal to $c\n";
}

// TODO:
// combine the next 3 conditionals into one
// if/elseif/else block that checks in order for:
// identical, equal, not equal/identical
$a = 5;
$b = 10;
$c = '10';
if ($b === $c) {
    echo "$b is identical to $c\n";
}
elseif ($b == $c) {
    echo "$b is equal to $c\n";
}
elseif ($b != $c) {
    echo "$b is not equal to $c\n";
}

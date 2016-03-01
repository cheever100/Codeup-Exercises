<?php
$a = 100;
$b = 200;

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return "ERROR: Both arguments ($a, $b) must be numbers\n";
    }
}

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	return $a - $b;
    } else {
    	return "ERROR: Both arguments ($a, $b) must be numbers.\n";
    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	return $a * $b;
    } else {
    	return "ERROR: Both arguments ($a, $b) must be numbers.\n";
    }
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b) && $b != 0) {
    	return $a / $b;
    } else {
    	return "ERROR: Both arguments ($a, $b) must be numbers and can't be zero.\n";
    }
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	return $a % $b;
    } else {
    	return "ERROR: Both arguments ($a, $b) must be numbers.\n";
    }
}

echo add(apple, 10);
echo subtract(20, 5);
echo multiply(5, 3);
echo divide(apple, 3);
echo modulus(10, 3);

// Make the error messages show the values of the arguments.

<?php

// for ($i = 0; $i < 5; $i++) {
//      echo "\$a has a value of {$a}\n";
// }


// $fruits = ['starfruit', 'apple', 'banana', 'grapes', 'dragonfruit'];
// for ($i = 0; $i < count($fruits); $i++) {
// 	echo $fruits[$i] . PHP_EOL;
// } 

//Prompt user for a starting number and ending number, 
//then display all the numbers from the starting to ending using a for loop.

// fwrite(STDOUT, 'Starting Number? ');
// $startNum = trim (fgets(STDIN));
// fwrite(STDOUT, 'Ending Number? ');
// $endNum = trim (fgets(STDIN));
// for ($i = $startNum; $i >= $startNum && $i <= $endNum; $i++) {
// 	echo "$i\n";
// }

Refactor to allow user to choose increment. (count by 1, 2, 10, ...)
fwrite(STDOUT, 'Starting Number? ');
$startNum = (int)trim (fgets(STDIN));
fwrite(STDOUT, 'Ending Number? ');
$endNum = (int)trim (fgets(STDIN));
fwrite(STDOUT, 'Increment? ');
$increment = (int)trim (fgets(STDIN));
for ($i = $startNum; $i >= $startNum && $i <= $endNum; $i = $i + $increment) {
	echo "$i\n";
}

// // Default increment to 1 if no input.
// fwrite(STDOUT, 'Starting Number? ');
// $startNum = trim (fgets(STDIN));
// fwrite(STDOUT, 'Ending Number? ');
// $endNum = trim (fgets(STDIN));
// fwrite(STDOUT, 'Increment? ');
// $increment = trim (fgets(STDIN));
// if ($increment == " ") {
// 	$increment = 1;
// }
// for ($i = $startNum; $i >= $startNum && $i <= $endNum; $i = $i + $increment) {
// 	echo "$i\n";
// }
// // if ($argc == 4) {
// // 	$startNum = $argv[1];
// // 	$endNum = $argv[2];
// // 	$increment = $argv[3];
// // } else {
// // 	$startNum = $argv[1];
// // 	$endNum = $argv[2];
// // 	$increment = 1;
// // }



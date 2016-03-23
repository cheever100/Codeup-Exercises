<?php

$fruit = [];

array_push($fruits, 'Runts');

array_push($fruits, 'bananas', 'kiwi');

//short hand for push
$fruits[] = 'papaya'; 

$languages = ['css', 'html5', 'js', 'mysql', 'php'];
$capitalizedLanguages = [];

foreach($languages as $language) {
	$capitalizedLanguages[] = strtoupper($language);
}
sort($capitalizedLanguages);
print_r($capitalizedLanguages);

// line 16 in long hand:
	array_push($capitalizedLanguages, strtoupper($language));

	foreach($capitalizedLanguages as $language) {
		print_r($capitalizedLanguages);
		array_pop($capitalizedLanguages);
	}

	$fruits = ['apple', 'grape', 'tomato', 'papaya'];

	$first = array_sift($fruits);
	$second = array_shift($fruits);
	$third = array_shift($fruits);
	$forth = array_shift($fruits);

	echo $first . PHP_EOL;
	echo $second . PHP_EOL;
	echo $third . PHP_EOL;
	echo $forth . PHP_EOL;

	print_r($fruits);

	$chores = ['chore 1', 'chore 2', 'chore 3'];
	array_unshift($chores, 'chore 4');
	print_r($chores);

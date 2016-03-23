<?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 // switch($dayOfWeek) {
 //    case 1:
 //         echo 'The day is Monday';
 //        break;
 //    case 2:
 //         echo 'The day is Tuesday';
 //        break;
 //    case 3:
 //         echo 'The day is Wednesday';
 //        break;
 //    case 4:
 //         echo 'The day is Thursday';
 //        break;
 //    case 5:
 //         echo 'The day is Friday';
 //        break;
 //    case 6:
 //         echo 'The day is Saturday';
 //        break;
 //    case 7:
 //         echo 'The day is Sunday';
 //        break;    
 // }

if ($dayOfWeek = 1) {
 	echo "Monday";
}
	else if ($dayOfWeek = date('2')) {
 	echo "Tuesday";
 	}


 
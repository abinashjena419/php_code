<?php

function leapyear($year) {
	if ($year % 4 != 0)  return false;
	if ($year % 100 != 0) return true;
	if ($year % 400 == 0) return true;
	return false;
}

/*
function leapyear($year) {
	if  ($year % 4 == 0) { 
		if ($year % 100 == 0) {
			if  ($year % 400 == 0) {
				return true;
			} else {
			        return false;
			}
		} else {
			return true;
		}
	}
	else {
		return false;
	}
}
 */

$year = 3000;
$is_leap = leapyear($year);

if ($is_leap) {
	echo "$year is a leap year\n";
} else {
	echo "$year is not a leap year\n";
}

?>

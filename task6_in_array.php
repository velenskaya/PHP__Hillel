<?php

//+ 6 task in_array - Проверяет, присутствует ли в массиве значение (своя реализация функции php)

// bool in_array ( mixed $needle , array $haystack [, bool $strict = FALSE ] )


function my_in_array ($b, $array, $strikt = false)
{
	foreach ($array as $name) {
		if ($strikt === true) {
			if ($name === $b) {
       			return true;
       		}
		} else {
			if ($name == $b) {
       			return true;
       		}
		}
   	}
    
    return false;
}


$arr = [1,35,45,76,89];
$number  = 35;

var_dump(my_in_array ($number, $arr));

<?php

//+ 6 task in_array - Проверяет, присутствует ли в массиве значение (своя реализация функции php)

// bool in_array ( mixed $needle , array $haystack [, bool $strict = FALSE ] )


function my_in_array ($b, $array)
{
   foreach ($array as $name) {
       if ($name == $b) {
         $result = "Значение ".$b. " в массиве есть"."<br>";
         return $result;
       } 
   }
       if (!isset($result)){  
            echo "Значение ".$b. " в массиве отсутствует"."<br>"; 
       }
}


$arr = [1,35,45,76,89];
$number  = 35;

echo my_in_array ($number, $arr);





<?php

//+ 6 task in_array - Проверяет, присутствует ли в массиве значение (своя реализация функции php)

// bool in_array ( mixed $needle , array $haystack [, bool $strict = FALSE ] )


function my_in_array ($b, $array)
{
   foreach ($array as $name) {
       if ($name == $b) {
         $result = "Число ".$b. " в массиве есть"."<br>";
         return $result;
       } 
   }
       if (!isset($result)){  
            echo "Числа ".$b. " в массиве нет"."<br>"; 
       }
}


$arr = [1,35,45,76,89];
$number  = 35;

echo my_in_array ($number, $arr);





<?php

//функция count - подсчитывает количество элементов массива или что-то в объекте (собственная реализация)


function count_my(array $arr)
{ 
    $i = 0;  
    foreach ($arr as $key=>$elem) {
        $i++;
    } 
     return $i;  
} 

$array = [18,25,13, 17,90,77,33];

echo count_my($array);

echo '<hr>';

$int =7;

echo count_my($int);
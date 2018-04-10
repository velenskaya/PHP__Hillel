<?php

//функция count - подсчитывает количество элементов массива или что-то в объекте (собственная реализация)
function count_my($arr)
{
    $i = 0;  
    is_array($arr); 
	foreach ($arr as $key=>$elem) {
    	if ($key >= 0) {
           $i++;
        } 
    } return $i;
} 

$array = [18,25,13, 17,90];
echo count_my($array);

?>
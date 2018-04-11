<?php

//функция count - подсчитывает количество элементов массива или что-то в объекте (собственная реализация)

function count_my($arr)
{ 
    if (!is_array($arr)) {
      return false;
    } else {
      $i = 0;  
      foreach ($arr as $key=>$elem) {
    	    $i++;
        } 
        return $i;
    }
    
} 

$array = [18,25,13, 17,90,77,33];
echo count_my($array);
<?php

//---функция array_keys -возвращает все или некоторое подмножество ключей массива

function array_keys_my($arr) 
{
    if (!is_array($arr)) {        // проверка - является ди переданный параметр  массивом   
        echo "вы ввели число, надо ввести массив";
        return false;
    } else  
      {    
        $array = [];               // объявляем массив, который будем заполнять ключами
        foreach ($arr as $key => $name) 
        {
           $array[] = $key;      // проходим по массиву и берем его ключи
        }
      return $array;         
      }
}
$new_arr = [13, 21, 13,];
$new_arr2 = 56;
echo '<pre>';
var_dump(array_keys_my($new_arr));
echo '</pre>';

echo (array_keys_my($new_arr2));

?>
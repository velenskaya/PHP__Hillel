<?php

//---функция array_keys -возвращает все или некоторое подмножество ключей массива

function array_keys_my($arr) 
{
	$array = [];                  // объявляем массив, который будем заполнять ключами
	foreach($arr as $key => $name) 
		{
			$array[] = $key;       // проходим по массиву и берем его ключи
		}
		return $array; 
}

$new_arr = [13, 21, 13,];

echo '<pre>';
var_dump(array_keys_my($new_arr));
echo '</pre>';


?>
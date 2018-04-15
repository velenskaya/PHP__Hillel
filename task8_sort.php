<?php

//- 8 task sort  - Сортирует массив (своя реализация функции php)

function my_sort(array $arr)
{
    $count = count($arr);
    for ($i = 0; $i < $count-1; $i++) {

    $m_min = $arr[$i];

    for ($j = $i + 1; $j < $count; $j++) {
      if ($arr[$j] < $m_min) {

            $mm = $arr[$i];

            $m_min = $arr[$j];

            $arr[$i] = $m_min;

            $arr[$j] = $mm;
       }
     }
   }
    return $arr;
}


$m = [1, 2, 3, 4, 10, 6, 7, 8, 9, 5];
var_dump(my_sort($m));

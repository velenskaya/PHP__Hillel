<?php
//+ 5 task array_sum ---Вычисляет сумму значений массива---(своя реализация функции php)


    function arr_sum_my(array $array)
    {
        $arr_sum = 0;                 //начальная сумма массива =0
        foreach ($array as $elem) {
            $arr_sum = $arr_sum + $elem;
        }
        return $arr_sum; // итоговая сумма всех элементов массива
    }

    $arr = [1, 10, 9, 15, 5, 13];

    echo arr_sum_my($arr);


    /*
    $array = [1, 10, 9, 15, 5, 13];

    $arr_sum = 0; //начальная сумма массива =0
    foreach ($array as $elem) {
        $arr_sum = $arr_sum + $elem;
    }
    echo $arr_sum; // итоговая сумма всех элементов массива


    echo "<hr>";
    */

<?php
//+ 4 task в массиве заменить все элементы большие данного числа Z этим числом

    function changeToMax($array, $z)
    {
        $i = 0;
        foreach ( $array as $key=>$elem ) {
            if ($elem > $z) {
                $array[$key] = $z;
                $i++;
            }
        } 
        return "Количество замен $i";
    }


    $arr = [18,25,13,16,18,19,33,14,15,15];
    $k = 13;

    echo changeToMax($arr, $k);

    // подсчитать количество замен

    /* $array = [18,25,13,16,10,12,33,11,15];
    $z = 13;
    $i = 0;

    foreach ($array as $key=>$elem) {
        if ($elem > $z) {
            $array[$key] = $z; // замена элементов массива 
            $i++;
        }
    } 

    echo '<pre>';
    var_dump($array);
    echo '</pre>';

    echo "Замен сделано $i";
    */
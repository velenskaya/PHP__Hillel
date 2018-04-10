<?php

//+1 task Написать метод, который выводит все положительные четные числа, которые менее заданного

function myFirst($b) 
{
	for ($a = 0; $a < $b; $a+=2) {
		echo $a.';';
	}
}

myFirst(15);

//тоже самое, но в стиле ООП 

class News
{
    public $b;
    
    public function myFirst($b) 
    {
    	for ($a = 0; $a < $b; $a+=2) {
            echo $a.';';
        }
    }
}

$obj = new News;
echo $obj->myFirst(15);

echo '<hr>';

//+ 2 task Вывести определенное количество элементов посл-ти Фибоначи

// вариант 1

$a = 0;
$b = 1;
echo $a.';';
echo $b.';';

for ($i = 0; $i < 50; $i++) {
    $c = $a + $b; 
    echo $c.';';
    $a = $b; 
    $b = $c;  
}

// вариант 2 через функцию

function fibonachi($a, $b, $k)
{
    echo $a.';';
    echo $b.';';
    
    for ($i = 0; $i < $k; $i++) {
        $c = $a + $b; 
        echo $c.';';
        $a = $b; 
        $b = $c;
        $i++;
    }
}
fibonachi(3, 5, 15);


// в стиле ООП

class Fibonachi
{

    public $a;
    public $b;
    public $c;
    
    public function fibo($a, $b, $k)
    {
            echo $a.';';
            echo $b.';';
            
            for ($i = 0; $i < $k; $i++) {
            $c = $a + $b; 
            echo $c.';';
            $a = $b; 
            $b = $c;
        }
    }
}

$obj = new Fibonachi;
$obj->fibo(0, 1, 15);

echo '<hr>';

//- 3 task найти в массиве число второе по величине



//+ 4 task в массиве заменить все элементы большие данного числа Z этим числом
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
	
//+ 5 task array_sum (своя реализация функции php)


    /*
    $array = [1, 10, 9, 15, 5, 13];

	$arr_sum = 0; //начальная сумма массива =0
	foreach ($array as $elem) {
		$arr_sum = $arr_sum + $elem;
	}
	echo $arr_sum; // итоговая сумма всех элементов массива


    echo "<hr>";
    */

    function arr_sum_my($array)
    {
        $arr_sum = 0; //начальная сумма массива =0
        foreach ($array as $elem) {
            $arr_sum = $arr_sum + $elem;
        }
        return $arr_sum; // итоговая сумма всех элементов массива
    }

    $arr = [1, 10, 9, 15, 5, 13];

    echo arr_sum_my($arr);


//- 6 task in_array - Проверяет, присутствует ли в массиве значение (своя реализация функции php)


//- 7 task array_diff - Вычислить расхождение массивов (своя реализация функции php)


//- 8 task sort  - Сортирует массив (своя реализация функции php)


//- 9 task strpos  - Возвращает позицию первого вхождения подстроки (своя реализация функции php)


//- 10 task substr - Возвращает подстроку (своя реализация функции php)


//- 11 task substr_count - (своя реализация функции php)


//- 12 task explode - Возвращает число вхождений подстроки (своя реализация функции php)


?>
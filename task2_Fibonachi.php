<?php

//+ 2 task Вывести определенное количество элементов посл-ти Фибоначи

// в стиле ООП--- через---RETURN---

class Fibonachi
{
    public $a;
    public $b;
    public $c;
    
    public function fibo($a, $b, $k)
    {
            $res = '';
            $res .= $a.';'; // $res = $res . 'a';
            $res .= $b.';';
            
            for ($i = 0; $i < $k; $i++) {
            $c = $a + $b; 
            $res .= $c.';'; // $res = $res . 'c';
            $a = $b; 
            $b = $c;
        }
        return $res;
    }
}

$obj = new Fibonachi;
echo $obj->fibo(0, 1, 15);
echo '<hr>';


// вариант simple

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

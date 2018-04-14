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


// 2 вариант с $this

class News
{
    public $b;
    
    public function myFirst() 
    {
        for ($a = 0; $a < $this->b; $a+=2) {
            echo $a.';';
        }
    }
}

$obj = new News;
$obj->b = 15;
echo $obj->myFirst();

echo '<hr>';
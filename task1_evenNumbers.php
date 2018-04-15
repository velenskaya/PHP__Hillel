<?php

function myFirst($b) 
{   $res = '';
    for ($a = 0; $a < $b; $a+=2) {
        $res .= $a.';';
    }
    return $res;
}

echo myFirst(20);
echo '<hr>';
//тоже самое, но в стиле ООП 

class News
{
    public $b;
    
    public function myFirst($b) 
    {
        $res = '';
        for ($a = 0; $a < $b; $a+=2) {
            $res .= $a.';';
        }
        return $res;
    }
}

$obj = new News;
echo $obj->myFirst(31);

echo '<hr>';


// 2 вариант с $this

class Newss
{
    public $b;
    
    public function __construct($m)
        {
           $this->b = $m;
        }
    
    public function myFirst() 
    {             
        $res = '';
        for ($a = 0; $a < $this->b; $a+=2) {
            $res .= $a.';';
        }
        return $res;
    }
}
$m = 100;
$obj = new Newss($m);
echo $obj->myFirst();

echo '<hr>';


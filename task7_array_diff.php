
<?php

//- 7 task array_diff - Вычислить расхождение массивов (своя реализация функции php)

//----в ООП------------------

class My_array_diff
{
    public $arr1; 
    public $arr2;  
   
    public function my_array_diff()
    {
        $arr = [];
        foreach ($this->arr1 as $value1) {
            $control = false;
            foreach ($this->arr2 as $value2) {
                if ($value1 === $value2) {
                    $control = true;
                    break;            
        		}        
    		}
		    if ($control === false) {
		        $arr[] = $value1;
		    } 
		}
   		return $arr;     
        
    }
}

$array1 = [1,2,8,3,77,];
$array2 = [8,5,1,4,];  

$obj = new My_array_diff();
$obj->arr1 = $array1;
$obj->arr2 = $array2;


print_r($obj->My_array_diff());






//-----------------------------


$arr1 = [1,2,8, 3];
$arr2 = [8,5,1,4,];


$arr = [];
foreach ($arr1 as $value1) {
    $control = false;
    foreach ($arr2 as $value2) {
        if ($value1 === $value2) {
            $control = true;
            break;            
        }        
    }
    if ($control === false) {
        $arr[] = $value1;
    } 
}
    
    //return $arr;

print_r($arr);  

?>

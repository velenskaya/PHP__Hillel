<?php

//+ 9 task strpos  - Возвращает позицию первого вхождения подстроки (своя реализация функции php)

// int strpos ( string $haystack , mixed $needle [, int $offset = 0 ] )

<?php

function my_strpos($haystack, $needle)
{
	$i = 0;

	while ( isset($needle[$i]) ) {
	
		$i++;
	}

	$h = 0;

	while ( isset($haystack[$h]) ) { 
		
		$bufer ='';

		for ( $j = $h; $j < $h+$i; $j++ ) {
			
			$bufer .= $haystack[$j]; 
		}
        
        $h++;
        
		if ( $bufer == $needle ) {
			return $h;

		} return false;

	   
	}

}


$haystack ='cabr';
$needle = 'ab';
var_dump(my_strpos( $haystack, $needle) );

?>
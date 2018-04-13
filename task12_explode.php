<?php

//+ 12 task explode  - Разбивает строку с помощью разделителя (своя реализация функции php)

// array explode ( string $delimiter , string $string [, int $limit = PHP_INT_MAX ] )


<?php

function my_explode($d, $s)
{
	$arr =[];
	$i = 0;
	$bufer = '';

	while ( isset( $s[$i]) ) {
		if ( $s[$i] != $d ) {
			$bufer .= $s[$i];
		} else {
				$arr[] = $bufer;
				$bufer = '';
			   }
	$i++;
	}
	return $arr;
}


$s = 'code of function explode ';
$d = ' ';

var_dump(my_explode($s, $d));

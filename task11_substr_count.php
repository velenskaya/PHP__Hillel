<?php

//+ 11 task substr_count — Возвращает число вхождений подстроки (своя реализация функции php)

//int substr_count ( string $haystack , string $needle [, int $offset = 0 [, int $length ]] )

function my_substr_count($haystack, $needle)
{
	$rasmerOkna = 0;

	while ( isset($needle[$rasmerOkna]) ) {
			$rasmerOkna++;
	}

	$posizTekElementa = 0;
	$count = 0;

	while ( isset($haystack[$posizTekElementa]) ) { 
		
		$okoshe4ko ='';

		for ( $j = $posizTekElementa; $j < $posizTekElementa+$rasmerOkna; $j++ ) {
			
			$okoshe4ko .= $haystack[$j]; 
		}    
        
		if ( $okoshe4ko == $needle ) {
			$count++;
		} 

		$posizTekElementa++;
  	}

  	return $count;
}



$haystack= 'test www test';
$needle  = 'test';

echo my_substr_count($haystack, $needle);
//var_dump(my_substr_count($haystack, $needle));


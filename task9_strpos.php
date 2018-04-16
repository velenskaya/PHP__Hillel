<?php

//+ 9 task strpos  - Возвращает позицию первого вхождения подстроки (своя реализация функции php)

// int strpos ( string $haystack , mixed $needle [, int $offset = 0 ] )

class My_strpos
{
	public $haystack;
	public $needle;

	public function my_strpos()
	{
		$rasmerOkna = 0;

		while ( isset($this->needle[$rasmerOkna]) ) {
				$rasmerOkna++;
		}

		$posizTekElementa = 0;

		while ( isset($this->haystack[$posizTekElementa]) ) { 
			
			$okoshe4ko ='';

			for ( $j = $posizTekElementa; $j < $posizTekElementa+$rasmerOkna; $j++ ) {
				
				$okoshe4ko .= $this->haystack[$j]; 
			}             
	        
			if ( $okoshe4ko == $this->needle ) {
				return $posizTekElementa;
			} 

			$posizTekElementa++;
	  	}

	  	return false;
	}

}


$obg = new My_strpos;
$obg->haystack ='cabrcabr';
$obg->needle = 'ab';

var_dump($obg->my_strpos());



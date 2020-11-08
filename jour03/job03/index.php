<?php

$str= "I'm sorry Dave I'm afraid I can't
do that";

$g= ["a", "e", "i", "o", "u", "y"];

for ($i=0; $i <=isset($str[$i]); $i++) { 
	for ($o=0; $o <=isset($g[$o]) ; $o++) { 
		if ($str[$i] == $g[$o] ) {
			echo $str[$i];
		}
	}
	
}

?>
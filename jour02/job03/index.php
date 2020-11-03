<?php

$i=0;

while ($i<=100) {
	$i++;

	if ($i <=20) {
		
		echo "<i> $i </i> <br/> ";

	}

	if ($i >=25 && $i <=50) {
		if ($i == 42) {
			echo "La plateforme_ <br/>";
	 		$i= $i+1;		
	 	}
		
		echo "<u> $i </u> <br/> ";
		
	}
	
	elseif ($i >20 && $i<=24) {
		echo $i , '<br/>' ;
	}
	
}

	



?>
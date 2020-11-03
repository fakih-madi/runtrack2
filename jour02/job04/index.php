<?php

$i=0;



    for ($i=1; $i<= 100; $i++) {
    	
    	if (($i%3 ==0) && ($i%5 ==0))
    		{
    			
    			echo "Fizzbuzz <br/>";
    		}
    		if(($i%3 ==0))
    			{
    				echo "fizz <br/>";
    			}

    		if(($i%5 ==0))
    			{
    				echo "buzz <br/>";
    			}
		
    	else{
		echo $i , '<br/>' ;
		}
    }

	


	



?>

<?php

    function nombrepremier($n){
        echo "Les nombres premiers entre 0 et ".$n." sont : ";
        $non = false;
        if($n<0){
            $non = true;
            $n = -$n;
        }

        for($i=2;$i<=$n;$i++){
            $nbDiv = 0; 
            for($p=1;$p<=$i;$p++){
                if($i%$p==0){
                    $nbDiv++;            
                }
            }
            if($nbDiv == 2){

                if($non){
                    echo "-";
                }
                echo $i.", ";
            }
        }
    }

    nombrepremier(1000);
?>
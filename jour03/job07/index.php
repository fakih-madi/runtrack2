<?php

$str='Certaines choses changent, et d\'autres ne changeront jamais.';
$memo=0;
$premierlettre=0;
$strlen=0;
while(isset($str[$strlen])){       
    $strlen++;                          
}

for($i=0; $i!=$strlen; $i++){
    $memo=$str[$i];
    if($i==0){
        $premierlettre=$str[$i];
    }
    if($i>0){
        $str[$i-1]=$memo;
    }
}
$str[$strlen-1]=$premierlettre;
echo $str;

?>
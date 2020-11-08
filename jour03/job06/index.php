<?php

$str='Les choses que l\'on possede finissent par nous posseder.';
$memo=0;

$strlen=0;
while(isset($str[$strlen])){       
    $strlen++;                          
}
for($i=0; $i<$strlen/2; $i++){
    $memo=$str[$i];
    $str[$i]=$str[strlen($str)-1-$i];              
    $str[strlen($str)-1-$i]=$memo;
}
echo $str;

?>
<?php

$str='On n est pas le meilleur quand on le croit mais quand on le sait';    

$dic=[                          
    'voyelles'=> ['a', 'e', 'i', 'o', 'u','y', 'A', 'E', 'I', 'O', 'U','Y'],      
    'consonnes'=>['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z']
];

$voyelles=0;
$consonnes=0;
$espaces=0;
for($i=0; $i!=strlen($str); $i++){
    $j=0;
    while(!empty($dic['voyelles'][$j])){
        if($str[$i]==$dic['voyelles'][$j]){
            $voyelles++;
        }
        $j++;
    }
    if($str[$i]==' '){
        $espaces++;             
    }
}

$consonnes=strlen($str)-($voyelles+$espaces);

?>

<html>
    <table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    echo '<td>'.$voyelles.'</td>';
                    echo '<td>'.$consonnes.'</td>';
                ?>
            </tr>
        </tbody>
    </table>
</html>
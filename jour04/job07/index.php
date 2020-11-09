<form action="index.php" method="post">
    hauteur = <input type="text" name="hauteur"><br>
    largeur = <input type="text" name="largeur"><br>
    <input type="submit" name="submit">
</form>

<?php

for($i=0; $i!=$_POST['hauteur']; $i++){         
    for($j=0; $j!=($_POST['largeur']/2)-1-$i; $j++){
        echo '&nbsp ';                          
    }
    echo '/';
    if($i>0){                                   
        for($k=0; $k!=$i*2; $k++){
            if($i!=$_POST['hauteur']-1){
                echo '&nbsp ';
            }
            else
            echo '_';
        }
    }
    echo '\\<br>';
}

for($i=0; $i!=$_POST['hauteur']; $i++){
    echo '|';
    for($j=0; $j!=($_POST['largeur']-2); $j++){              
        if($i!=$_POST['hauteur']-1){
            echo '&nbsp ';
        }
        else
        echo '_';
    }
    echo '|<br>';
}

?>
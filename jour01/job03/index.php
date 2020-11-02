<?php

$nom = "madi";
$prenom = "fakih";
$age = 22;
$taille = 1.73;
$marseillais = "true";


?>


<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>string</td>
            <td>$nom</td>
            <td> <?php echo $nom; ?> </td>
        </tr>
        <tr>
        	<td>string</td>
        	<td>$prenom</td>
        	<td><?php echo $prenom; ?></td>
        </tr>
        <tr>
        	<td>int</td>
        	<td>$age</td>
        	<td><?php echo $age; ?></td>
        </tr>
        <tr>
        	<td>float</td>
        	<td>$taille</td>
        	<td><?php echo $taille; ?></td>
        </tr>
        <tr>
        	<td>bool</td>
        	<td>$marseillais</td>
        	<td><?php echo $marseillais; ?></td>
        </tr>
    </tbody>
</table>

<h3>Ex1</h3>
<?php
$myAge=$_GET["age"];
if ($myAge>=18){
    echo "Vous êtes majeur";
}
else{
    echo"Vous êtes mineur";
}
?>
<form method="get">
    <input name="age">
     <input type="submit">  
</form>

<h3>Ex2</h3>
<?php
$isEasy=true;
if ($isEasy=true){
    echo "its easy!";
}
else{
    echo "it's hard";
}
    
?>
<h3>Ex3</h3>
<?php
$myAge=19;
$myGenre="Femme";
if ($myAge && $myGenre){
    echo "Vous êtes majeure et une femme";
}
?>

<h3>Ex4</h3>
<?php
$magnitude=6;
    switch ($magnitude){
        case 1:
            echo "Micro-séisme impossible à ressentir.";
        break;
        case 2:
            echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;
        case 3:
            echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;
        case 3:
            echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
        break;
        case 4:
            echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
        break;
        case 5:
            echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
        break;
        case 6:
            echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
        break;
        case 7:
            echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        break;
        case 8:
            echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break;
        case 9:
            echo "Séisme capable de tout détruire sur une très vaste zone.";
        break;
    }

?>
<h3>Ex5</h3>
<?php

$maVariable="homme";
if($maVariable!="femme"){
    echo "C'est une développeuse";
}
else{
    echo "C'est un développeur";
}
    ?>
<h3>Ex6</h3>
<?php
$monAge=18;
if ($monAge>=18){
    echo"Tu es majeur!";
}
else{
    echo"Tu es mineur!";
}
?>
<h3>Ex7</h3>
<?php
$maVariable == false;
if($maVariable==false){
    echo"C'est pas bon!";
}
else{
    echo "C'est ok!";
}
    ?>
<h3>Ex8</h3>
<?php
$maVariable==true;
if($maVariable==true){
     echo "C'est ok!";
}
else{
    echo"C'est pas bon!";
}
?>
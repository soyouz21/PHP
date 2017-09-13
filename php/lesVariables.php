<h3>Ex1</h3>
<?php
$nom="3";
    echo $nom;
    
?>
    
    
<hr/><h3>Ex2</h3>

<?php
$nom="chiche";
// lorsque la valeur de la variable est entre guillemets, c'est du texte donc de type string
$prenom="alice";
// lorsque la valeur de la variable n'est entre guillemets, t'as intérêt à mettre un nombre pour que le type soit un nombre.
$age=25;
echo $nom;
echo $prenom;
echo $age;

if (is_int($age)){
    echo "c'est un nombre entier";
}
    
    ?>

<hr/><h3>Ex3</h3>

<?php
$km="1";
echo $km,"</br>";

$km="3";
echo $km,"</br>";

$km="125";
echo $km,"</br>";

?>
<hr/><h3>Ex4</h3>

<?php
$myString="abc";
echo $myString,"</br>";
$myInteger=30;
echo $myInteger,"</br>";
$myFloat=4.2;
echo $myFloat,"</br>";
$myBolean=true;
echo $myBolean;

?>
<hr/><h3>Ex5</h3>
<?php
$myInt="";
echo $myInt;
$myInt="12";
echo $myInt;
?>
<hr/><h3>Ex6</h3>
<?php
$myName="Miriam";
echo "Bonjour ".$myName." Comment vas-tu?";
?>
<hr/><h3>Ex7</h3>
<?php
$myName="chice";
    $myPrenom="Alice";
    $myAge="25";
echo "Bonjour ".$myName." ".$myPrenom." tu as ".$myAge." ans";
?>
<hr/><h3>Ex8</h3>
<?php
$myVar1="3"+"4";
echo $myVar1,"</br>";
$myVar2="5"*"20";
echo $myVar2,"</br>";
$myVar3="45"/"5";
echo $myVar3,"</br>";
?>
<?php
/*$array[0]="janvier";
$array[1]="février";
$array[2]="mars";
$array[3]="avril";
$array[4]="mai";
echo "$array";*/

echo "<hr>";
$year = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aôut', 'septembre', 'octobre', 'novembre', 'décembre');

foreach ($year as $value){
    echo $value."<br/>";
}

echo $year[2];

echo $year[5];

echo $year[7]="août";

echo "<hr>";

$AuvergneRhoneAlpes= array(
"73"=> "Savoie",
    "03"=> "Allier",
    "15"=>"Cantal",
    "26"=>"Drome",
    "42"=>"Loire",
    "69"=>"Rhône",
"57000"=>"Metz");

echo "69". "Rhône";
echo "<hr>";

foreach ($year as $key => $value) {
 echo "Clé: ". $key . ", Valeur : ". $value . "<br/ >\n";
    echo $year;
}
echo "<hr>";
foreach ($AuvergneRhoneAlpes as $key => $value) {
 echo "Clé: ". $key . ", Valeur : ". $value . "<br/ >\n";
    echo $AuvergneRhoneAlpes;
}
echo "<hr>";
foreach ($AuvergneRhoneAlpes as $key => $value) {
 echo "Le numéro du Département ". $key . ", a comme nom : ". $value . "<br/ >\n";
    echo $AuvergneRhoneAlpes;
}





/*$year = array(
"0" => "Janvier",
"1" => "Février",
"2" => "Mars" );

foreach ($year as $key => $value) {
 echo "Clé: ". $key . ", Valeur : ". $value . "<br/ >\n";
    echo $year;
}*/


?>


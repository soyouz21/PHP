
<?php
$myResult="";
function myReturn(){
    return "true";//fonction qui return à true
}
$myResult=myReturn();


    
    $result="";//ici je declare une variable vide pour pouvoir la reutiliser plus tard dans mon code
        
    function myFunction ($chaineDeCaractere){
        return $chaineDeCaractere;      
}
        $result=myFunction("soleil");//affiche une chaine de caractere


$myEx3="";//ici ex 3
function myConcatenation($x,$y){//affiche la concatenation de 2 chaines d caractere.
    return $x.$y;
    
}
$myEx3=myConcatenation ("maria","miriam");//je predefinis la valeur de mon x et y

$myEx4="";//ici ex 4
function compare($num1,$num2){//fonction qui compare 2 variables
    if ($num1>$num2){//si num1 est plus grd que num2 alors affiche texte
        return "Le premier nombre est plus grand";
    }
    else{
        if($num1<$num2){//si num1 est plus petit que num2, alors affiche texte
            return "Le premier nombre est plus petit";
        }
        else {//sinon affiche sont identiques
            return"Les deux nombres sont identiques";
        }
    }
}
$myEx4=compare(2,1);//ici je stocke les valeurs de ma fonction dans ma variable pré établie au tout début pour aller chercher et affiche mon résultat.

$myEx5="";
function myContatener($Var1, $Var2){
    return $Var1.$Var2;
}
$myEx5=myContatener("maria",12);

$myEx6="";
function myDonnées ($donnee1,$donnee2,$donnee3){
    return "Bonjour ".$donnee1." ".$donnee2.", tu as ".$donnee3." ans";
}
$myEx6=myDonnées ("Chiche","Alice",20);

$myEx7="";
function myGenre($age,$genre){
    if($genre=="femme"){
        if($age>=18){
            return "Vous êtes une femme et vous êtes majeure";
        }
        else {
            return "Vous êtes une femme et vous êtes mineure";
        }
    }if ($genre=="homme"){
        if ($age>=18){
            return "Vous êtes un homme et vous êtes majeur";
        }
        else {
            return "Vous êtes un homme et vous êtes mineur";
        }
    }
}
     
$myEx8="";
function myAddition ($var1=10,$var2=20,$var3=30){
    return $var1+$var2+$var3;
    
}
$myEx8=myAddition();


    ?>


<!-- ici je mets mon html ou j'insere le echo de la variable du php dans mon body et c'est ce que je v faire pour tous mes exercices-->
<html>
<head>
    <title>Mes exercices sur les fonctions
    </title>
    
    </head>
    <body>
        <h3>Ex1</h3>
        <p><?=$myResult?><!--ici ma variable ex1--></p>
        <h3>Ex2</h3>
        <p><?=$result?><!--ici ma variable ex2--></p>
        <h3>Ex3</h3>
        <p><?=$myEx3?><!--ici ma variable ex3--></p>
         <h3>Ex4</h3>
        <p><?=$myEx4?><!--ici ma variable ex4--></p>
         <h3>Ex5</h3>
        <p><?=$myEx5?><!--ici ma variable ex5--></p>
         <h3>Ex6</h3>
        <p><?=$myEx6?><!--ici ma variable ex6--></p>
          <h3>Ex7</h3>
        <p><?=$myEx7?><!--ici ma variable ex7--></p>
        <h3>Ex8</h3>
        <p><?=$myEx8?><!--ici ma variable ex8--></p>
        
        
        
    </body>

</html>


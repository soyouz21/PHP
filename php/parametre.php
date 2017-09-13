<?php
//var_dump($_GET['url']);

//exercice2
$exo3='';
function exercice3(){
    
if (isset($_GET["prenom"]))//si dans le parametre prenom il y a une valeur alors il va afficher vrai, sinon faux!
{
    $prenom=$_GET["prenom"];//alors il enregistre la valeur du parametre prenom dans la variable prenom
}
if (isset($_GET["age"]))//si dans le parametre prenom il y a une valeur alors il va afficher vrai, sinon faux!
{
    $age=$_GET["age"];//alors il enregistre la valeur du parametre prenom dans la variable prenom
}
if (isset($_GET["nom"]))//si dans le parametre prenom il y a une valeur alors il va afficher vrai, sinon faux!
{
    $nom=$_GET["nom"];//alors il enregistre la valeur du parametre prenom dans la variable prenom
}

if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET["age"])) // On a le nom et le prénom et l age
{
	return 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . " tu as"." ". $_GET['age']. '!';
}
else // Il manque des paramètres, on avertit le visiteur
{
	return 'Il faut renseigner un nom et un prénom et ton age!';
}
}
$exo3=exercice3();


//Exercice 12
if(isset($_GET['batiment']) AND isset($_GET["salle"])){ 
    return "A bien afficher les donnes";
}
else{
    return"rentrez les données svp";
}

$exo12=exercices12();
    
?>
<html>
<head>
    <title>ex parametres</title>
    
    </head>
    <body>
        <form action="" method="get">
    <input name="nom" type="text">
         <input name="prenom" type="text">
         <input  type="submit">
            </form>

          <h3>Ex3</h3>
        <p><?=("<h1>".$prenom." ".$nom."</h1>")?>><!--ici ma variable ex1--></p>
        
        <h3>Ex12</h3>
    
        <p><?=$exo12?><!--ici ma variable ex2--></p>
        
    </body>
</html>
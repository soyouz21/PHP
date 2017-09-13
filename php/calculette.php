


<!DOCTYPE html>
<html>
    <head>
    <title></title>
        </head>

<body>

    <?php

    //isset=c'est défini
if (isset($_POST["nombre1"])&& isset($_POST["nombre2"])&& isset($_POST["choix"])){
    $nombre1=$_POST["nombre1"];//definir des variables pour pouvoir les reutiliser dans mes calculs
    $nombre2=$_POST["nombre2"];
    $choix=$_POST["choix"];
    
//if pour savoir si mes cellules sont remplies
 if (empty($nombre1)OR empty($nombre2)){
       echo "Ce champ doit être rempli";
   }
    elseif ($nombre2==0 and $choix=="division"){
        echo "La division par 0 n'est pas possible";
    }
 

   //if pour la calculatrice
    
    if ($choix=="addition"){
        echo $nombre1+$nombre2;
        echo "addition";
       
    }
    elseif ($choix=="soustraction"){
        echo  $nombre1-$nombre2;
        echo "soustraction";
    }
    elseif ($choix=="division"){
      echo  $nombre1/$nombre2;
    }
    else {
      echo $nombre1*$nombre2;
    }
}

?>
    
<form action="" method="post">
<input type="text" name="nombre1" size="5"/> 
<select name="choix">
    <option value="addition">+</option>
    <option value="soustraction">-</option>
    <option value="division">/</option>
    <option value="multiplication">*</option>
</select>
<input type="text" name="nombre2" size="5"/>
<input type="submit" value="Valider" />
</form>
    </body>
</html>


<?php
$login=$_POST["Login"];
setcookie("login","$login","365*24*3600");

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Cookies</title>
   </head>
   <body>
     <form class="" action="" method="post">
   <input type="text" name="login" value="Login">
   <input type="text" name="motDePasse" value="mot de passe">
   <input type="submit" name="envoyer" value="Send">
     </form>
<?php
if (isset ($_COOKIE["$login"])){
  echo "bien rempli";
}
else{
  echo"je ne te connais pas!";
}

 ?>
   </body>
 </html>

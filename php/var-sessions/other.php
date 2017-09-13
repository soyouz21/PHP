<?php
// if (!session_start())
// exit;
// else{
// echo "ok";
// }
?>
<!DOCTYPE html>

<html>
 <head>
   <meta charset="utf-8">
   <title>Superglobales</title>
 </head>
 <body>
   <h1>Exercices superglobales</h1>
<p>
  Bonjour,<?=$_SESSION['name'],$_SESSION['prenom']?>,j'ai <?=$_SESSION['age']?></p>

 <pre>
   <?= $_SERVER["HTTP_USER_AGENT"],
   $_SERVER["SERVER_NAME"],
   $_SERVER["REMOTE_ADDR"];?>

 </pre>
 <p>
   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
 </p>
 </body>
</html>

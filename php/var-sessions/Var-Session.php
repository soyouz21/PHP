 <?php
if (!session_start()){
exit;
}

else{
$_SESSION['name']="Miriam";
$_SESSION['prenom']="Mimi";
$_SESSION['age']="18 ans";
}
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
  Bonjour,<?=$_SESSION['name']?>." ".<?=$_SESSION['prenom']?>,j'ai <?=$_SESSION['age']?></p>
  <pre>
    <?= $_SERVER["HTTP_USER_AGENT"],
    $_SERVER["SERVER_NAME"],
    $_SERVER["REMOTE_ADDR"];?>
  </pre>
  <form class="" action="" method="post">
<input type="text" name="login" value="login">
<input type="text" name="motDePasse" value="mot de passe">
<input type="submit" name="envoyer" value="Send">
  </form>

  </body>
</html>

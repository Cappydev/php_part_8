<?php
// On démarre la session AVANT d'écrire du code HTML

session_start();


// On s'amuse à créer quelques variables de session dans $_SESSION

$_SESSION['prenom'] = 'kevin';
$_SESSION['nom'] = 'Lanel';
$_SESSION['age'] = 27;
session_write_close();
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exo 2 part 8 PHP</title>
  </head>
  <body>
    <p>Tu es à l'accueil de mon site (index.php). Tu veux aller sur une autre page ?</p>
      <a href="session.php">Lien vers mapage.php</a>
    </p>
  </body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Titre de ma page</title>
  </head>
  <body>
    <p>Salut <?php echo $_SESSION['prenom']; ?> !</p>
    <p>Tu es à l'accueil de mon site (index.php). Tu veux aller sur une autre page ?</p>
    </p>
  </body>
</html>
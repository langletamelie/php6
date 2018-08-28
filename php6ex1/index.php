<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 6EX1</title>
</head>
<body>
  <p>
  <?php
  if (isset($_GET['lastname']) && isset($_GET['firstname'])) //vérification de la présence des paramètres url lastname et de firstname
  {
    echo 'Hello ' . $_GET['lastname'] . ' ' . $_GET['firstname']; //affichage des paramètres url lastname et firstname
  }else{ //$_GET est une variable superglobale
      echo 'veuillez vérifier les paramètres d\'url';
  }
  ?>
</p>
</body>
</html>

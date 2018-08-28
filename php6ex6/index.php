<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 6EX6</title>
</head>
<body>
  <p>
  <?php
if (!empty($_GET['building']) && !empty($_GET['room'])) //vérification de la présence de building et room
{
  echo $_GET['building'] . ' ' . $_GET['room']; //affichage building et room
}
  ?>
</p>
</body>
</html>

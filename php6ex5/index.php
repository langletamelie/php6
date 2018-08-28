<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 6EX5</title>
</head>
<body>
  <p>
  <?php
if (isset($_GET['week'])) //vérification de la présence de week
{
  echo $_GET['week']; //affichage de week
}
  ?>
</p>
</body>
</html>

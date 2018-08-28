<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 6EX3</title>
</head>
<body>
  <p>
  <?php
if (isset($_GET['startDate']) && isset($_GET['endDate'])) // vérification de la présence de startDate et de endDate
{
  echo 'Date de début: ' . $_GET['startDate'] . ' et date de fin: ' . $_GET['endDate']; //affichage de startDate et de endDate
}else{
    echo 'il manque un paramètre';
}
  ?>
</p>
</body>
</html>

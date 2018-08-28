<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 6EX2</title>
</head>
<body>
  <p>
  <?php
if (isset($_GET['age'])) //vérification de la présence du paramètre url age
{
  echo 'Vous avez ' . $_GET['age']; // affichage de l'age si présence du paramètre url age
}else{
  echo 'L\'âge ne s\'affiche pas';//affichage message d'erreur absence paramètre url age
}
  ?>
</p>
</body>
</html>

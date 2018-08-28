<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>PHP 6EX4</title>
    </head>
    <body>
        <p>
            <?php
            if (isset($_GET['language']) AND isset($_GET['server'])) { //vérification de la présence des paramètres url language et server
                echo $_GET['language'] . ' ' . $_GET['server']; //affichage des paramètres
            } else {
                echo 'il manque un paramètre'; //message d'erreur absence de paramètres
            }
            ?>
        </p>
    </body>
</html>

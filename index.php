<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Livres - POO </title>
</head>
<body>
<?php
    require("Auteur.php");
    require("Livre.php");

    $auteur1 = new Auteur("King ","Stephen ");

    $livre1 = new Livre("Ca ","1138 ","1986 ",20, $auteur1 );

    $livre2 = new Livre("Simetierre ","374 ","1983 ",15, $auteur1);

    $livre3 = new Livre("Le Fléau ","823 ","1978 ",14, $auteur1);

    $livre4 = new Livre("Shinning ","447 ","1977 ",16, $auteur1);


    $auteur1->afficherBibliographie();

    ?>
</body>
</html>
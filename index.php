<?php
include("classes/formulaire.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire</title>
</head>
<body>
    <?php
    $nom = new Formulaire();
    $nom->setChamp('text', 'nom');
    $age = new Formulaire();
    $age->setChamp('number', 'age');
    $email = new Formulaire();
    $email->setChamp('email', 'email');
    $bouton = new Formulaire();
    $bouton->setBouton('valider');


    echo Formulaire::DEBUT_FORMULAIRE;
    //On affiche les champs du formulaire
    echo $nom->getChamp();
    echo $age->getChamp();
    echo $email->getChamp();
    echo $bouton->getBouton();
    echo Formulaire::FIN_FORMULAIRE;
    ?>
</body>
</html>
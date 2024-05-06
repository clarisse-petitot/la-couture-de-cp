<?php

require "classes.php";
require "fonctions.php";

if(!isset($_GET["id_creation"])){
    header("Location: creations.php");
    exit;
};

$id_creation = $_GET["id_creation"];
$creation = getCreation($id_creation);

if(is_null($creation)){
    header("Location: index.php");
    exit;
}

$tissus = getTissus($id_creation);
$prix = getPrix($creation);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation | La Couture de CP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <svg></svg>
    <header>
        <img src="logo.png" alt="logo du site">
    </header>
    <nav>
        <ul>
            <li><a href="creations.php">Creations</a></li>
            <li><a href="articles.php">Article</a></li>
            <li><a href="commandes.php">Passer commande</a></li>
        </ul>
    </nav>
    <img src="<?= $creation->getChemin() ?>" alt="image représentant : <?= $creation->getNom() ?>">
    <h1><?= $creation->getNom() ?></h1>
    <?php
    if($prix>0)
    {
        ?>
            <p><?= $prix?>€ </p>
            <button>Acheter</button>
        <?php
    }
    ?>
    <p><?= $creation->getDescription() ?></p>
    <ul>
        <?php
        for($i=0; $i<count($creation->getTags()); $i++)
        {
        ?>
            <li><?= $creation->getTags()[$i]->getNom() ?></li>
        <?php
        }
        ?>
    </ul>
    <dl>
        <dt>Categorie : </dt>
        <dd><?= $creation->getCategorie()->getNom() ?></dd>
        <dt>Taille : </dt>
        <dd><?= $creation->getTaille() ?></dd>
        <dt>Temps de creation : </dt>
        <dd><?= $creation->getTpsCreation() ?></dd>
        <dt>Tissu(s) utilisé(s) : </dt>
        <?php
        for($i=0; $i<count($tissus); $i++)
        {
        ?>
            <dd><?= $tissus[$i]->getNom() ?></dd>
        <?php
        }
        ?>
        <dt>Longueur de tissu : </dt>
        <dd><?= $creation->getSurfaceTissu() ?></dd>
    </dl>

    
</body>
</html>
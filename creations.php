<?php

require "classes.php";
require "fonctions.php";

$creations = getCreations();
$alltags = getAllTags();
$categories = getCategories();
$filtres = getFiltres();

if (count($_GET) > 0) {
    foreach ($creations as $key => $creation) {
        if (!in_array($creation->getCategorie(), $filtres["categories"])) {
            $tag_in = false;
            foreach ($creation->getTags() as $tag) {
                if (in_array($tag, $filtres["tags"])) {
                    $tag_in = true;
                }
            }
            if (!$tag_in) {
                unset($creations[$key]);
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creations | La Couture de CP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
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

    <h1>Mes Créations</h1>

    <h3>Filtres : </h3>
    <form action="creations.php">
        <fieldset>
            <legend>Categorie : </legend>
            <?php
            foreach ($categories as $categorie) {
            ?>
                <input type="checkbox" id="<?= $categorie->getIdCategorie() ?>" name="categorie-<?= $categorie->getIdCategorie() ?>">
                <label for="<?= $categorie->getIdCategorie() ?>"><?= $categorie->getNom() ?></label>
            <?php
            }
            ?>
        </fieldset>
        <fieldset>
            <legend>Tag : </legend>
            <?php
            foreach ($alltags as $tag) {
            ?>
                <input type="checkbox" id="<?= $tag->getIdTag() ?>" name="tag-<?= $tag->getIdTag() ?>">
                <label for="<?= $tag->getIdTag() ?>"><?= $tag->getNom() ?></label>
            <?php
            }
            ?>
        </fieldset>
        <input type="submit" value="Valider">
    </form>

    <section>
        <?php
        foreach ($creations as $creation) {
            $prix = getPrix($creation);
        ?>
            <a href="creation.php?id_creation=<?= $creation->getIdCreation() ?>">
                <img src="<?= $creation->getChemin() ?>" alt="image représentant : <?= $creation->getNom() ?>">
                <h3><?= $creation->getNom() ?></h3>
                <p><?= $creation->getDescription() ?></p>
                <ul>
                    <?php
                    for ($i = 0; $i < count($creation->getTags()); $i++) {
                    ?>
                        <li><?= $creation->getTags()[$i]->getNom() ?></li>
                    <?php
                    }
                    ?>
                </ul>
                <?php
                if ($prix > 0) {
                ?>
                    <p><?= $prix ?>€ </p>
                    <button>Acheter</button>
            <?php
                }
            }
            ?>
            </a>
    </section>

</body>

</html>
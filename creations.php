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
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://unpkg.com/alpinejs" defer=""></script>
</head>

<body>
    <?php
    require './components/navbar.php';
    require './components/filters.php';
    ?>

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

    <?php
    require './components/cards.php';
    ?>

</body>

</html>
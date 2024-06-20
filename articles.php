<?php

require "classes.php";
require "fonctions.php";

$articles = getArticles();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles | La Couture de CP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>

<body>
    <?php
    require './components/navbar.php';
    ?>

    <h1>Mes Articles</h1>

    <?php
    foreach ($articles as $article) {
    ?>
        <article>
            <a href="<?= $article->getCheminPage() ?>">
                <h3><?= $article->getTitre() ?></h3>
                <p><?= $article->getDatePub() ?></p>
                <img src="<?= $article->getCheminImg() ?>" alt="image représentant l'article en question">
            </a>
        </article>
    <?php
    }
    ?>

</body>

</html>
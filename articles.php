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
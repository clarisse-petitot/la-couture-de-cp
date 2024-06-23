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
    <style>
        body {
            background: url(./img/blob.svg);
            background-size: cover;
        }
    </style>
</head>

<body>
    <?php
    require './components/navbar.php';
    ?>

    <section class="text-gray-600 body-font overflow-hidden">
    <h2 class="lg:text-4xl dark:text-white text-3xl lg:leading-9 leading-7 text-gray-800 font-semibold md:py-8 lg:px-20 md:px-6 py-8 px-4">Mes Articles</h2>
        <div class="container px-5 py-5 mx-auto">
            <div class="-my-8 divide-y-2 divide-gray-100">

                <?php
                foreach ($articles as $article) {
                ?>
                    <a href="<?= $article->getCheminPage() ?>">
                        <div class="py-8 flex flex-wrap md:flex-nowrap">
                            <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col  mx-10">
                                <img  class="rounded-lg w-72" src="<?= $article->getCheminImg() ?>" alt="image représentant l'article en question">
                                <span class="mt-1 text-gray-500 text-sm"><?= $article->getDatePub() ?></span>
                            </div>
                            <div class="md:flex-grow ml-5">
                                <h2 class="text-xl font-normal text-gray-900 title-font mb-2"><?= $article->getTitre() ?></h2>
                                <p class="leading-relaxed text-justify"><?= $article->getTexte() ?></p>
                            </div>
                        </div>
                    </a>
                <?php
                }
                ?>

</body>

</html>
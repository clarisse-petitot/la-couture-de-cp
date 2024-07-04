<?php

require "classes.php";
require "fonctions.php";

$articles = getArticles();

?>

<!DOCTYPE html>
<html lang="fr" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles | La Couture de CP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <style>
        body {
            background: url(./img/blob.jpg);
            background-size: cover;
        }
    </style>
</head>

<body class="min-h-full relative">
    <?php
    require './components/navbar.php';
    ?>

    <section class="text-gray-600 body-font overflow-hidden pb-20">
    <h2 class="lg:text-4xl dark:text-white text-3xl lg:leading-9 leading-7 text-gray-800 font-semibold md:py-8 lg:px-20 md:px-6 py-8 px-4 mb-10">Mes Articles</h2>
        <div class="container px-5 py-5 mx-auto">
            <div class="-my-8 divide-y-2 divide-gray-100">

                <?php
                foreach ($articles as $article) {
                ?>
                 <div class="pb-5 border-b-2 border-gray-300">
                    <a href="./articles/<?= $article->getIdArticle() ?>.php">
                        <div class="py-8 flex flex-wrap md:flex-nowrap">
                            <div class="w-80 flex-shrink-0 flex flex-col mx-10">
                                <img  class="rounded-lg" src="img/articles/<?= $article->getIdArticle() ?>.png" alt="image représentant l'article en question">
                                <span class="mt-1 text-gray-500 text-sm"><?= $article->getDatePub() ?></span>
                            </div>
                            <div class="md:flex-grow mx-5 pt-5 md:pt-0">
                                <h2 class="text-xl font-normal text-gray-900 title-font"><?= $article->getTitre() ?></h2>
                                <p class="leading-relaxed text-justify"><?= $article->getTexte() ?></p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
                <?php
    require './components/footer.php';
    ?>
</body>

</html>
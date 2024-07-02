<?php

require "classes.php";
require "fonctions.php";

if (!isset($_GET["id_creation"])) {
    header("Location: creations.php");
    exit;
};

$id_creation = $_GET["id_creation"];
$creation = getCreation($id_creation);

if (is_null($creation)) {
    header("Location: index.php");
    exit;
}

$tissus = getTissus($id_creation);
$prix = getPrix($creation);

?>

<!DOCTYPE html>
<html lang="fr" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation | La Couture de CP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <style>
            body{
            background: url(./img/blob.jpg);
            background-size: cover;
        }
    </style>
</head>

<body class="min-h-full relative">
    <?php
    require './components/navbar.php';
    ?>
    <section class="text-gray-700 body-font overflow-hidden pb-10">
        <div class="container px-5 py-12 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img src="img/creations/<?= $creation->getIdCreation() ?>.png" alt="image représentant : <?= $creation->getNom() ?>" class="lg:w-1/2 w-full object-cover object-center rounded">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"><?= $creation->getNom() ?></h1>
                    <div class="flex mb-4">
                        <span class="flex items-center space-x-2">
                            <?php
                            for ($i = 0; $i < count($creation->getTags()); $i++) {
                            ?>
                                <label>
                                    <input class="sr-only peer" name="size" type="radio" value="xs" />
                                    <div class="w-full h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                                        <?= $creation->getTags()[$i]->getNom() ?>
                                    </div>
                                </label>
                            <?php
                            }
                            ?>
                        </span>
                    </div>

                    <p class="leading-relaxed"><?= $creation->getDescription() ?></p>
                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-300 mb-5">
                        <div class="flex ml-6 items-center">
                            <span class="mr-3">Categorie</span>
                            <div class="relative rounded border appearance-none border-gray-400 py-1 focus:outline-none focus:border-red-500 text-base pl-3 pr-3"><?= $creation->getCategorie()->getNom() ?></div>
                        </div>
                        <div class="flex ml-6 items-center">
                            <span class="mr-3">Taille</span>
                            <div class="relative rounded border appearance-none border-gray-400 py-1 focus:outline-none focus:border-red-500 text-base pl-3 pr-3">
                                <?= $creation->getTaille() ?>

                            </div>
                        </div>
                    </div>
                    <div class="flex ml-6 items-center">
                        <span class="mr-2">Tissu(s) utilisé(s) : </span>
                        <span class="flex items-center space-x-2">
                            <?php
                            for ($i = 0; $i < count($tissus); $i++) {
                            ?>
                                <label>
                                    <input class="sr-only peer" name="size" type="radio" value="xs" />
                                    <div class="w-full h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                                        <?= $tissus[$i]->getNom() ?>
                                    </div>
                                </label>
                            <?php
                            }
                            ?>
                        </span>
                    </div>
                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-300 mb-5">
                        <div class="flex ml-6 items-center">
                            <span class="mr-3">Temps de Création</span>
                            <div class="relative rounded border appearance-none border-gray-400 py-1 focus:outline-none focus:border-red-500 text-base pl-3 pr-3"><?= $creation->getTpsCreation() ?>h</div>
                        </div>
                        <div class="flex ml-6 items-center">
                            <span class="mr-3">Longueur du tissu</span>
                            <div class="relative rounded border appearance-none border-gray-400 py-1 focus:outline-none focus:border-red-500 text-base pl-3 pr-3">
                                <?= $creation->getSurfaceTissu() ?>

                            </div>
                        </div>
                    </div>
                    <?php
                    if ($prix > 0) {
                    ?>
                        <div class="flex">
                            <span class="title-font font-medium text-2xl text-gray-900"><?= $prix ?>€</span>
                            <button class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">Acheter</button>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php
    require './components/footer.php';
    ?>
</body>

</html>
<?php

require "classes.php";
require "fonctions.php";

$creations = getCreations();
$alltags = getAllTags();
$alltissus = getAllTissus();
$categories = getCategories();
$filtres = getFiltres();
$vendre = false;

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
                $tissu_in = false;
                foreach ($creation->getTissus() as $tissu) {
                    if (in_array($tissu, $filtres["tissus"])) {
                        $tissu_in = true;
                    }
                }
                if (!$tissu_in) {
                    unset($creations[$key]);
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creations | La Couture de CP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://unpkg.com/alpinejs" defer=""></script>
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
    require './components/filters.php';
    require './components/cards.php';
    require './components/footer.php';
    ?>

</body>

</html>
<?php

require "classes.php";
require "fonctions.php";

$creations = getCreations();
$alltags = getAllTags();
$alltissus = getAllTissus();
$categories = getCategories();
$filtres = getFiltres();
$vendre = true;

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
    <title>Passer une commande | La Couture de CP</title>
    <link rel="stylesheet" href="style.css">
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

<?php
if (isset($_POST['email']) && !empty($_POST['email'])) {
    define('MAILHOST', "smtp.gmail.com");
    $subject = "New contact request: " . $_POST['objet'];
    $message = $_POST['prenom'] . " " . $_POST['nom'] . "souhaite commander voici la description : " . $_POST['description'];
    $headers = 'From: info@website.com' . "\r\n" .
        'Reply-To: ' . $_POST['email'] . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    echo mail('clarisse.petitot@gmail.com', $subject, $message, $headers);

    die('Thank you for your email');
}
?>

<body class="min-h-full relative">

    <?php
    require './components/navbar.php';
    require './components/form.php';
    require './components/footer.php';
    ?>



</body>

</html>
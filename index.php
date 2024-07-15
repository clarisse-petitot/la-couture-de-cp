<!DOCTYPE html>
<html lang="fr" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | La Couture de CP</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>
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
    <div class="min-w-screen flex overflow-hidden sm:px-5 md:px-20 lg:px-36 py-24 md:pb-32 md:pt-32">
        <div class="flex-1 min-h-full min-w-full rounded-3xl text-gray-800 md:flex items-center text-center justify-center">
            <div class="w-full md:w-1/2 justify-center content-center flex">
                <h1 class="font-bold text-6xl lg:text-7xl font-sans text-black px-10 md:px-0">La Couture de CP</h1>
            </div>
            <div class="w-full md:w-1/2 text-center md:px-10 flex items-center justify-center">
                <img src="img/logo.png" height="256" alt="La couture de CP logo" />
            </div>
        </div>
    </div>

    <section class="text-gray-600 body-font overflow-hidden pb-24">
        <h2 class="lg:text-4xl text-3xl lg:leading-9 leading-7 text-gray-800 font-semibold md:pt-16 lg:px-20 md:px-6 px-4">Mes dernières créations</h2>
        <?php
        require './components/carousel.php';
        ?>
    </section>
    <?php
    require './components/footer.php';
    ?>



</body>

</html>
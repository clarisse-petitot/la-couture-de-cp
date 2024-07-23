<!DOCTYPE html>
<html lang="fr" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande | La Couture de CP</title>
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
    <div class="flex flex-col p-10 md:p-0 md:flex-row gap-10 w-full justify-center items-center mt-10 pb-32">
        <div class="flex flex-col gap-12">
            <h3 class="font-black text-6xl text-pink-500 uppercase">Merci !</h3>
            <p>
                Votre commande a bien été envoyé
            </p>
            <a href="../index.php" class="text-pink-500 flex gap-2 transform transition-all hover:scale-110 hover:text-pink-600 w-fit-content">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                </svg>
                <span>Retour</span>
            </a>
        </div>
        <div>
            <img src="img/logo.png" class="h-48 lg:h-64" alt="logo cp">
        </div>
    </div>
    <?php
    require './components/footer.php';
    ?>

</body>

</html>
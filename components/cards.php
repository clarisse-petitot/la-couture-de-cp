<?php
/*
require "classes.php";
require "fonctions.php";

$creations = getCreations();
*/
?>


<div class="bg-white">
    <div class="py-16 sm:py-24 lg:mx-auto lg:max-w-7xl lg:px-8">
        <div class="relative mt-8">
            <div class="relative -mb-6 w-full overflow-x-auto pb-6">
                <ul role="list" class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-x-0">

                    <?php
                    foreach ($creations as $creation) {
                    ?>
                    <a href="creation.php?id_creation=<?= $creation->getIdCreation() ?>">
                        <li class="inline-flex w-64 flex-col text-center lg:w-auto py-3">
                            <div class="group relative">
                                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">
                                    <img src="<?= $creation->getChemin() ?>" alt="image représentant : <?= $creation->getNom() ?>" class="h-full w-full object-cover object-center group-hover:opacity-75">
                                </div>
                                <div class="mt-6">
                                    <h3 class="mt-1 font-semibold text-gray-900">
                                            <span class="absolute inset-0"></span>
                                            <?= $creation->getNom() ?>
                                    </h3>
                                    <p class="text-sm text-gray-500"><?= $creation->getDescription() ?></p>
                                </div>
                            </div>
                        </li></a>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
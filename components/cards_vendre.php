    <div class="py-5 sm:py-10 lg:mx-auto lg:max-w-7xl lg:px-8">
        <div class="relative">
            <div class="relative mb-6 w-full overflow-x-auto pb-6">
                <ul role="list" class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-x-0">

                    <?php
                    foreach ($creations as $creation) {
                        if (getPrix($creation)!=0)
                        {
                    ?>
                    <a href="creation.php?id_creation=<?= $creation->getIdCreation() ?>">
                        <li class="inline-flex w-64 flex-col text-center lg:w-auto p-3 bg-black/25 m-3 rounded-md">
                            <div class="group relative">
                                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">
                                    <img src="img/creations/resized/<?= $creation->getIdCreation() ?>_low.png" alt="image représentant : <?= $creation->getNom() ?>" class="h-full w-full object-cover object-center group-hover:opacity-75">
                                </div>
                                <div class="mt-3">
                                    <h3 class="mt-1 font-semibold text-gray-900">
                                            <span class="absolute inset-0"></span>
                                            <?= $creation->getNom() ?>
                                    </h3>
                                </div>
                            </div>
                        </li></a>
                    <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
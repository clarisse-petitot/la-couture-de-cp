    <div class="py-5 sm:py-10 lg:mx-auto lg:max-w-7xl lg:px-8">
        <div class="relative">
            <div class="relative mb-6 w-full overflow-x-auto pb-6 px-20">
                <ul role="list" class="mx-4 inline-flex space-x-10 sm:mx-6 lg:mx-0 lg:grid lg:grid-cols-3 lg:gap-x-10 lg:space-x-0">

                    <?php
                    foreach ($creations as $creation) {
                    ?>
                        <a href="creation.php?id_creation=<?= $creation->getIdCreation() ?>">
                            <li class="inline-flex w-64 flex-col text-center lg:w-auto p-3 bg-black/25 m-3 rounded-md ">
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
                                    <!--<div class="relative h-[300px] w-[300px] cursor-pointer rounded-md" style="background-image:linear-gradient(0deg,rgba(255,255,255,.4)0%,rgba(0,212,255,0) 25%), url('img/creations/resized/<?= $creation->getIdCreation() ?>_low.png');background-size:cover;">
                                        <span class="absolute bottom-2 left-3 text-black/75 text-lg font-semibold"><?= $creation->getNom() ?></span>
                                    </div>
                                </div>-->
                            </li>
                        </a>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
<?php

require "classes.php";
require "fonctions.php";

$carousel = getCarousel()

?>

<section class="splide mt-16">
    <div class="splide__track">
        <ul class="splide__list">
            <?php
            foreach ($carousel as $creation)
            {
            ?>
            <li class="splide__slide">
                <a href="creation.php?id_creation=<?= $creation->getIdCreation() ?>">
                <div class="relative h-[250px] w-[250px] cursor-pointer rounded-md group-hover:opacity-75" style="background-image:linear-gradient(0deg,rgba(255,255,255,.6)0%,rgba(0,212,255,0) 25%), url('img/creations/resized/<?= $creation->getIdCreation() ?>_low.png');background-size:cover;">
                    <span class="absolute bottom-2 left-3 text-black/75 text-lg font-semibold"><?=$creation->getNom()?></span>
                </div>
                </a>
            </li>
            <?php
            }
            ?>
        </ul>
    </div>
</section>

<script>
    const splide = new Splide('.splide', {
        type: 'loop',
        drag: 'free',
        focus: 'center',
        arrows: boolean = false,
        pagination: boolean = false,
        perPage: 3,
        autoScroll: {
            speed: 1,
        },
    }).mount( window.splide.Extensions );

    splide.mount();

</script>

<!-- <div class="grid grid-cols-3 mt-[150px] place-items-center">
    <div class="relative h-[250px] w-[250px] cursor-pointer" style="background-image:linear-gradient(0deg,rgba(255,255,255,.3)0%,rgba(0,212,255,0) 25%), url('/img/robe_lune.png');background-size:cover;">
        <span class="absolute bottom-5 left-5 text-white">Robe Lune</span>
    </div>
    <div class="relative h-[350px] w-[350px] cursor-pointer" style="background-image:linear-gradient(0deg,rgba(255,255,255,.3)0%,rgba(0,212,255,0) 25%), url('/img/robe_lune.png');background-size:cover;">
        <span class="absolute bottom-5 left-5 text-white">Robe Lune</span>
    </div>
    <div class="relative h-[250px] w-[250px] cursor-pointer" style="background-image:linear-gradient(0deg,rgba(255,255,255,.3)0%,rgba(0,212,255,0) 25%), url('/img/robe_lune.png');background-size:cover;">
        <span class="absolute bottom-5 left-5 text-white">Robe Lune</span>
    </div>
</div> -->
<?php
require_once 'fonctions.php';
?>

<nav aria-label="Pagination" class="flex justify-center content-center">
    <ul class="inline-flex space-x-2 pb-24">

        <a href="<?= $page ?>?id_page=1<?= getQueryWithoutIdPage() ?>">
            <li><button class="flex items-center justify-center w-10 h-10 text-pink-500 transition-colors duration-150 rounded-full focus:shadow-outline hover:bg-pink-100">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                        <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg></button>
            </li>
        </a>
        <?php
        if ($id_page != 1) {
        ?>
            <a href="<?= $page ?>?id_page=<?= ($id_page - 1) . getQueryWithoutIdPage() ?>">
                <li><button class="w-10 h-10 text-pink-500 transition-colors duration-150 rounded-full focus:shadow-outline hover:bg-pink-100"><?= $id_page - 1 ?></button></li>
            </a>
        <?php
        }
        ?>
        <a href="<?= $page ?>?id_page=<?= ($id_page) . getQueryWithoutIdPage() ?>">
            <li><button class="w-10 h-10 text-white transition-colors duration-150 bg-pink-500 border border-r-0 border-pink-500 rounded-full focus:shadow-outline"><?= $id_page ?></button></li>
        </a>
        <?php
        if ($id_page != $nbr_page_total) {
        ?>
            <a href="<?= $page ?>?id_page=<?= ($id_page + 1) . getQueryWithoutIdPage() ?>">
                <li><button class="w-10 h-10 text-pink-500 transition-colors duration-150 rounded-full focus:shadow-outline hover:bg-pink-100"><?= $id_page + 1 ?></button></li>
            </a>
        <?php
        }
        ?>
        <a href="<?= $page ?>?id_page=<?= ($nbr_page_total) . getQueryWithoutIdPage() ?>">
            <li><button class="flex items-center justify-center w-10 h-10 text-pink-500 transition-colors duration-150 rounded-full focus:shadow-outline hover:bg-pink-100">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                        <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg></button>
            </li>
        </a>
    </ul>
</nav>
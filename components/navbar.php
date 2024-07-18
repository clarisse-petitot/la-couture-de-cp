<nav class="border-gray-200 mt-3 sticky top-0 z-10 bg-pink-100 w-full">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 pb-2">
        <a href="/index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="img/logo.png" class="h-12" alt="La couture de CP logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap">La Couture de CP</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center rounded-lg md:hidden hover:bg-gray-100 focus:outline-none" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                <li>
                    <a href="index.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-pink-500 md:p-0 " aria-current="page">Accueil</a>
                </li>
                <li>
                    <a href="creations.php?id_page=1" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-pink-500 md:p-0">Creations</a>
                </li>
                <!--<li>
                    <a href="articles.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-pink-500 md:p-0">Articles</a>
                </li>-->
                <li>
                    <a href="a_vendre.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-pink-500 md:p-0 ">A vendre</a>
                </li>
                <li>
                    <a href="commandes.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-pink-500 md:p-0 ">Passer Commande</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

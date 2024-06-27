<form class="px-72 py-20" method='POST'>
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900 lg:text-4xl dark:text-white text-3xl lg:leading-9 leading-7 text-gray-800 font-semibold">Passer une commande</h2>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="objet" class="block text-sm font-medium leading-6 text-gray-900">Objet</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input type="text" name="objet" id="objet" value="<?= $_POST['objet']?>" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description précise de la commande</label>
                    <div class="mt-2">
                        <textarea id="description" name="description" rows="5" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= $_POST['description']?></textarea>
                    </div>
                </div>

            </div>
        </div>

        <div class="border-b border-gray-900/10 pb-12">
            <h3 class="text-xl font-semibold leading-7 text-gray-900">Informations personnelles</h3>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="nom" class="block text-sm font-medium leading-6 text-gray-900">Nom</label>
                    <div class="mt-2">
                        <input type="text" name="nom" id="nom" autocomplete="given-name" value="<?= $_POST['nom']?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="prenom" class="block text-sm font-medium leading-6 text-gray-900">Prenom</label>
                    <div class="mt-2">
                        <input type="text" name="prenom" id="prenom" value="<?= $_POST['prenom']?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Adresse Email</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" value="<?= $_POST['email']?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="adresse" class="block text-sm font-medium leading-6 text-gray-900">Adresse Postale</label>
                    <div class="mt-2">
                        <input type="text" name="adresse" id="adresse" value="<?= $_POST['adresse']?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-2 sm:col-start-1">
                    <label for="ville" class="block text-sm font-medium leading-6 text-gray-900">Ville</label>
                    <div class="mt-2">
                        <input type="text" name="ville" id="ville" value="<?= $_POST['ville']?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="codep" class="block text-sm font-medium leading-6 text-gray-900">Code Postal</label>
                    <div class="mt-2">
                        <input type="text" name="codep" id="codep" value="<?= $_POST['codep']?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="pays" class="block text-sm font-medium leading-6 text-gray-900">Pays</label>
                    <div class="mt-2">
                        <input type="text" name="pays" id="pays" value="<?= $_POST['pays']?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-12">
            <div class="relative flex gap-x-3">
                <div class="flex h-6 items-center">
                    <input id="conditions" name="conditions" type="checkbox" <?php if(isset($_POST['conditions'])){?> checked <?php } ?> class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                </div>
                <div class="text-sm leading-6">
                    <label for="conditions" class="font-medium text-gray-900">Conditions d'utilisation</label>
                    <p class="text-gray-500">clause obligatoire</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Apply Filter Button (Large Screen) -->

    <div class="hidden md:block absolute right-20 bottom-20 md:py-5 lg:px-10 md:px-5 py-5 px-4">
                <button type="submit" id='submit' name='submit' class="hover:bg-gray-700 dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:ring focus:ring-offset-2 focus:ring-gray-800 text-base leading-4 font-normal py-4 px-6 text-white bg-black">Envoyer</button>
            </div>

            <!-- Apply Filter Button (Table or lower Screen) -->

            <div class="block md:hidden w-full mt-5">
                <button type="submit" id='submit' name='submit' class="w-full hover:bg-gray-700 dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:ring focus:ring-offset-2 focus:ring-gray-800 text-base leading-4 font-normal py-3 px-5 text-white bg-black">Envoyer</button>
            </div>
    <?php
    if ($res == "succes"){
        ?>
        <p class="text-sm font-medium bg-green-100 p-4 mb-5 text-green-400">Commande envoyée avec succès</p>
        <?php
    }
    else{
        if($res!=null){
        ?>
        <p class="text-sm font-medium bg-red-100 p-4 mb-5 text-red-400"><?= $res ?></p>
        <?php
    }}
    ?>
</form>
<div class="h-screen w-screen flex items-center justify-center bg-stone-100">
    <div class="p-10 rounded shadow-sm bg-stone-50 max-w-lg w-2/3">
        <div class="mb-6 p-10 bg-white -m-10">
            <h1 class="font-bold text-2xl text-stone-300">Commande personnalisée</h1>
        </div>
        <form>
            <div class="grid grid-cols-2 gap-6">
                <div class="flex flex-col mb-4">
                    <label>Nom
                        <span class="block text-xs font-light text-stone-400">instructions ici lorem ipsum</span>
                    </label>
                    <input type="text" placeholder="Votre nom" class="mt-2 px-4 py-2 shadow rounded"/>
                </div>
                <div class="flex flex-col mb-4">
                    <label>Prénom
                        <span class="block text-xs font-light text-stone-400">instructions ici lorem ipsum</span>
                    </label>
                    <input type="text" placeholder="Votre prénom" class="mt-2 px-4 py-2 shadow rounded"/>
                </div>
            </div>
            <div class="flex flex-col mb-4">
                <label>Email
                    <span class="block text-xs font-light text-stone-400">instructions ici lorem ipsum</span>
                </label>
                <input type="email" placeholder="Votre Adresse email" class="mt-2 px-4 py-2 shadow rounded"/>
            </div>
            <div class="flex flex-col mb-4">
                <label>Téléphone
                    <span class="block text-xs font-light text-stone-400">instructions ici lorem ipsum</span>
                </label>
                <input type="tel" placeholder="XX XX XX XX XX" class="mt-2 px-4 py-2 shadow rounded"/>
            </div>
            
            <div class="flex flex-col mb-4">
                <label>Description précise de votre commande
                    <span class="block text-xs font-light text-stone-400">instructions ici lorem ipsum</span>
                </label>
                <textarea rows="5" placeholder="..." class="mt-2 px-6 py-2 shadow rounded"></textarea>
            </div>
            <div class="mt-6 flex gap-6">
                <button type="submit" class="rounded-full bg-orange-300 py-4 px-10 font-bold text-white shadow hover:bg-blue-500">Envoyer</button>  
                <button type="submit" class="rounded-full bg-transparent py-4 px-10 font-bold text-stone-400 border border-stone-200 hover:border-orange-300 hover:text-orange-300">Réinitialiser</button>  
            </div>
        </form>
    </div>
</div>
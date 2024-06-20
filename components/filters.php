<div class="filters">
    <div class="mx-auto flex  w-full pt-4 sm:max-w-[640px] md:max-w-[768px] lg:max-w-[1024px] xl:max-w-[1280px] 2xl:max-w-[1536px]">
        <div x-data="filters()" @reset="reset = $event.detail.reset, filterCounter = 0">
            <div class="flex flex-wrap items-center">
                <div class="flex items-start">
                    <div class="mb-3" x-ref="myFilter" x-data="{
                              show: false,
                              counter: 0,
                              }
                              " @reset.window="counter = 0">
                        <button id="dropdownDefault" data-dropdown-toggle="dropdown" x-on:click="open" type="button" class="flex min-h-[3rem] items-center justify-between rounded-md bg-stone-100 px-4 py-2 text-stone-800">
                            Catégorie
                            <span x-show="counter" x-text="counter" class="bg-green-500 text-green-100 card-pills--counter ml-2 rounded-md px-2 py-1 text-sm" style="display: none">0</span>
                            <i class="fas fa-angle-down pl-3 text-stone-700 dark:text-stone-300"></i>
                        </button>
                        <div x-show="isOpen()" x-on:click.away="close" class="w-46 shadow-stone-55 absolute z-10 divide-y divide-gray-100 overflow-hidden rounded-md bg-white shadow-lg " data-popper-placement="bottom" style="display: none">
                            <ul class="text-gray-700" aria-labelledby="dropdownDefault">
                                <?php
                                foreach ($categories as $categorie) {
                                ?>
                                    <li x-data="{ 
                                        checked: false
                                    }" @reset.window="checked = false">
                                        <button @click="count" :class="checked ? 'text-green-500 bg-green-50' : ''" class="group flex w-full items-center justify-between px-4 py-2 hover:bg-stone-500 hover:text-stone-300">
                                            <?= $categorie->getNom() ?>
                                            <i :class="
                              checked ? 'text-green-400' : 'text-gray-600'
                            " class="fas fa-check pl-4 group-hover:text-white text-gray-600"></i>
                                        </button>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>

                    <div class="ml-3 mb-3" x-ref="myFilter" x-data="{
                              show: false,
                              counter: 0,
                              }
                              " @reset.window="counter = 0">
                        <button id="dropdownDefault" data-dropdown-toggle="dropdown" x-on:click="open" type="button" class="flex min-h-[3rem] items-center justify-between rounded-md bg-stone-100 px-4 py-2 text-stone-800">
                            Tag
                            <span x-show="counter" x-text="counter" class="bg-green-500 text-green-100 card-pills--counter ml-2 rounded-md px-2 py-1 text-sm" style="display: none">0</span>
                            <i class="fas fa-angle-down pl-3 text-stone-700 dark:text-stone-300"></i>
                        </button>
                        <div x-show="isOpen()" x-on:click.away="close" class="w-46 shadow-stone-55 absolute z-10 divide-y divide-gray-100 overflow-hidden rounded-md bg-white shadow-lg " data-popper-placement="bottom" style="display: none">
                            <ul class="text-gray-700" aria-labelledby="dropdownDefault">
                                <?php
                                foreach ($alltags as $tag) {
                                ?>
                                    <li x-data="{ 
                                        checked: false
                                    }" @reset.window="checked = false">
                                        <button @click="count" :class="checked ? 'text-green-500 bg-green-50' : ''" class="group flex w-full items-center justify-between px-4 py-2 hover:bg-stone-500 hover:text-stone-300">
                                            <?= $tag->getNom() ?>
                                            <i :class="
                              checked ? 'text-green-400' : 'text-gray-600'
                            " class="fas fa-check pl-4 group-hover:text-white text-gray-600"></i>
                                        </button>
                                    </li>
                                <?php
                                }
                                ?>
                        </div>
                    </div>

                    <div>
                        <button @click="$dispatch( 'reset', { reset : !reset } )" x-show="filterCounter" class="mb-3 ml-4 flex min-h-[3rem] items-center justify-between rounded-md bg-stone-500 px-4 py-2 text-stone-50" style="display: none">
                            <i class="fas fa-times pr-2 group-hover:text-white"></i>
                            Réinitialiser
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function filters() {
            return {
                filterCounter: 0,
                reset: false,
                resetCounter: false,
                open() {
                    this.show = true;
                },
                close() {
                    this.show = false;
                },

                isOpen() {
                    return this.show === true;
                },

                count() {
                    this.show = false;
                    this.checked = !this.checked;
                    if (this.checked) {
                        this.counter = this.counter + 1;
                        this.filterCounter = this.filterCounter + 1;
                    } else if (!this.checked) {
                        this.counter = this.counter - 1;
                        this.filterCounter = this.filterCounter - 1;
                    }
                },
            };
        }
    </script>
</div>
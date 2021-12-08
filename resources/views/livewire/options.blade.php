<div>
    @if($editOption)

    <section
        class="absolute left-0 top-0 h-screen flex justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
        <div class="w-full lg:w-6/12 px-4 mt-6">
            <div
                class="bg-white flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Edit Option
                        </h6>
                        <i wire:click="$toggle('editOption')" class="fas fa-times text-2xl cursor-pointer"></i>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">


                    <form wire:submit.prevent="updateOption()">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Option Details
                        </h6>

                        <div class="flex flex-wrap">

                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Option Name
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="optionname">
                                        @error('optionname')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="ml-3 mt-3 ">
                                    <x-table.button color="gray"
                                        class="py-2 px-4 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-400">
                                        Update Option</x-table.button>
                                </div>

                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endif



    @if($addOption)

    <section
        class="absolute left-0 top-0 h-screen flex justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
        <div class="w-full lg:w-6/12 px-4 mt-6">
            <div
                class="bg-white flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Add Option
                        </h6>
                        <i wire:click="$toggle('addOption')" class="fas fa-times text-2xl cursor-pointer"></i>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">


                    <form wire:submit.prevent="optionAdd()">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Option Details
                        </h6>

                        <div class="flex flex-wrap">

                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Option Name
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            wire:model="optionName" placeholder="Enter Option Name">
                                        @error('optionName')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="ml-3 mt-3 ">
                                    <x-table.button color="gray"
                                        class="py-2 px-4 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-400">
                                        Add Option</x-table.button>
                                </div>

                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if (session('status'))
    <div class="flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="flex items-center justify-center w-12 bg-green-500">
            <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
            </svg>
        </div>

        <div class="px-4 py-2 -mx-3">
            <div class="mx-3">
                <span class="font-semibold text-green-500 dark:text-green-400">Success</span>
                <p class="text-sm text-gray-600 dark:text-gray-200"> {{ session('status') }}</p>

            </div>
        </div>
    </div>
    @endif

    @if (session('warning'))
    <div class="flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="flex items-center justify-center w-12 bg-red-500">
            <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z" />
            </svg>
        </div>

        <div class="px-4 py-2 -mx-3">
            <div class="mx-3">
                <span class="font-semibold text-red-500 dark:text-red-400">Error</span>
                <p class="text-sm text-gray-600 dark:text-gray-200">{{ session('warning') }}</p>

            </div>
        </div>
    </div>
    @endif


    <div class="md:col-span-2 xl:col-span-3 mb-3">
        <h3 class="text-2xl font-semibold">Option List</h3>
    </div>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">

        <div class="flex justify-between">
            <div class="relative text-gray-600">
                <input type="search" wire:model="search" placeholder="Search"
                    class="bg-white border border-gray-600 h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                        xml:space="preserve" width="512px" height="512px">
                        <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>
            </div>
            <span class="flex justify-end m-2">
                <x-table.button wire:click="$set('addOption', true)" color="blue"
                    class="py-2 px-4 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">Add Option
                </x-table.button>
            </span>
        </div>

        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">ID</th>
                        <th class="px-4 py-3">Option Name</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <tr
                        class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                        @forelse($options as $option)
                    <tr
                        class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-sm">{{ $option->id }}</td>
                        <td class="px-4 py-3 text-sm">{{ $option->option_nm }}</td>
                        <td class="px-4 py-3 text-sm flex space-x-2">
                            <x-table.button wire:click="viewOption({{ $option->id }})" color="blue" class="py-2 px-4">
                                View</x-table.button>
                            <x-table.button wire:click="deleteOption({{ $option->id }})" color="red" class="py-2 px-4">
                                Delete</x-table.button>

                        </td>
                    </tr>
                    @empty
                    <tr
                        class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">

                        <td class="px-4 py-3 text-sm text-red-600 text-center font-semibold" colspan="3">No records</td>

                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
        <div
            class="px-4 py-3 text-xs font-semibold text-gray-100 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
            <!-- Pagination -->
            <div class="">
                {{$options->links()}}
            </div>
        </div>
    </div>


    <!---------------------------------Option Values Section------------------------------------------------->

    @if($editValue)

    <section
        class="absolute left-0 top-0 h-screen flex justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
        <div class="w-full lg:w-6/12 px-4 mt-6">
            <div
                class="bg-white flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Edit Value
                        </h6>
                        <i wire:click="$toggle('editValue')" class="fas fa-times text-2xl cursor-pointer"></i>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">


                    <form wire:submit.prevent="updateValue()">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Values Details
                        </h6>


                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Options
                                    </label>
                                    <select wire:model="optionid" name="optionid" id=""
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option value="">Choose an Option...</option>
                                        @forelse($options as $option)
                                        <option value="{{ $option->id }}">{{ $option->option_nm }}
                                        </option>
                                        @empty
                                        <option value="">No records...</option>
                                        @endforelse
                                    </select>
                                    @error('optionid')<span class="text-xs text-red-600">{{ $message }}</span>@enderror

                                </div>
                            </div>

                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Value Name
                                    </label>
                                    <input type="text"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        wire:model="valuenname">
                                    @error('valuename')<span class="text-xs text-red-600">{{
                                        $message }}</span>@enderror
                                </div>
                            </div>

                            <div class="ml-3 mt-3 ">
                                <x-table.button color="gray"
                                    class="py-2 px-4 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-400">
                                    Update Value</x-table.button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endif






    <div class="md:col-span-2 xl:col-span-3 mb-3">
        <h3 class="text-2xl font-semibold">Option Values List</h3>
    </div>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">

        <div class="flex justify-between">
            <div class="relative text-gray-600">
                <input type="search" wire:model="search" placeholder="Search"
                    class="bg-white border border-gray-600 h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                        xml:space="preserve" width="512px" height="512px">
                        <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>
            </div>


            <span class="flex justify-end m-2">

                <x-table.button wire:click="$toggle('addValue')" color="blue"
                    class="py-2 px-4 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">Add Value
                </x-table.button>
            </span>


        </div>

        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">ID</th>
                        <th class="px-4 py-3">Values Name</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <tr
                        class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                        @forelse($values as $value)
                    <tr
                        class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-sm">{{ $value->id }}</td>
                        <td class="px-4 py-3 text-sm">{{ $value->value_name }}</td>
                        <td class="px-4 py-3 text-sm flex space-x-2">
                            <x-table.button wire:click="viewValue({{ $value->id }})" color="blue" class="py-2 px-4">View
                            </x-table.button>
                            <x-table.button wire:click="deleteValue({{ $value->id }})" color="red" class="py-2 px-4">
                                Delete
                            </x-table.button>

                        </td>
                    </tr>
                    @empty
                    <tr
                        class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">

                        <td class="px-4 py-3 text-sm text-red-600 text-center font-semibold" colspan="3">No records</td>

                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
        <div
            class="px-4 py-3 text-xs font-semibold text-gray-100 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
            <!-- Pagination -->
            <div class="">
                {{$options->links()}}
            </div>
        </div>
    </div>



    @if($addValue)

    <section
        class="absolute left-0 top-0 h-screen flex justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
        <div class="w-full lg:w-6/12 px-4 mt-6">
            <div
                class="bg-white flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Add Values
                        </h6>
                        <i wire:click="$toggle('addValue')" class="fas fa-times text-2xl cursor-pointer"></i>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">


                    <form wire:submit.prevent="valueAdd()">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Value Details
                        </h6>

                        <div class="flex flex-wrap">

                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Options
                                    </label>
                                    <select wire:model="optionID" name="optionID" id=""
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option value="">Choose an Option...</option>
                                        @forelse($options as $option)
                                        <option value="{{ $option->id }}">{{ $option->option_nm }}
                                        </option>
                                        @empty
                                        <option value="">No records...</option>
                                        @endforelse
                                    </select>
                                    @error('optionID')<span class="text-xs text-red-600">{{ $message }}</span>@enderror

                                </div>
                            </div>

                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Value Name
                                    </label>
                                    <input type="text"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        wire:model="valueName" placeholder="Enter Value Name">
                                    @error('valueName')<span class="text-xs text-red-600">{{$message }}</span>@enderror
                                </div>
                            </div>

                            <div class="ml-3 mt-3 ">
                                <x-table.button color="gray"
                                    class="py-2 px-4 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-400">
                                    Add Value</x-table.button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!--------------------------------------End of Values Section --------------------------------------------->
</div>
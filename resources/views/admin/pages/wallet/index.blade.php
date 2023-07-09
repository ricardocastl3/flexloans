<x-admin-layout>


    <div class="flex flex-col my-8">
        <h2 class="font-bold text-md text-white">Minhas Carteiras</h2>
        <x-admin.overline/>
        <h2 class="font-light text-violet-700">Certifique se de manter suas contas atualizadas!</h2>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 mt-8 gap-4">

            <div class="hover:scale-105 scale-100 transition-all border-2 border-violet-950 hover:border-violet-700 relative flex flex-col bg-gradient-to-r from-violet-900 via-rose-900 to-orange-900 rounded-lg px-8 py-2">
                <div x-data="{open:false}">
                    <div class="absolute top-0 right-0 m-4" @click.outside="open=false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 text-white cursor-pointer"
                        @click="open = !open">
                            <path fill-rule="evenodd" d="M10.5 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" clip-rule="evenodd" />
                        </svg>
                        <div x-show="open"
                        x-transition
                        class="bg-gray-900 border border-gray-800 absolute top-0 right-0 rounded-lg mr-4">
                            <a href="#" class="text-white text-xs font-bold hover:bg-gray-800 flex items-center rounded-lg p-2 w-28">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                                Editar
                            </a>
                            <a href="#" class="text-red-500 text-xs font-bold hover:bg-gray-800 flex items-center rounded-lg p-2 w-28">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                                </svg>
                                Eliminar
                            </a>
                        </div>
                    </div>
                </div>
                <h2 class="font-bold text-white mt-4">Alimentação</h2>
                <h2 class="font-light- text-md text-gray-300 mt-4">0000 0000 0000 0000</h2>
                <div class="flex items-center justify-between w-full">
                    <h2 class="font-bold text-white text-xl">200.03USD</h2>
                    <img src="{{ asset('assets/icons/flexwbg.png') }}" alt="" class="w-16 h-16">
                </div>
            </div>

            <!-- Add Card -->
            <div class="flex items-center justify-center border border-violet-500 rounded-lg p-8">
                <a href="#" class="hover:bg-violet-800 text-violet-800 hover:text-white flex items-center justify-center p-6 rounded-full border border-violet-800">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 5.25a.75.75 0 01.75.75v5.25H18a.75.75 0 010 1.5h-5.25V18a.75.75 0 01-1.5 0v-5.25H6a.75.75 0 010-1.5h5.25V6a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

        </div>

    </div>


</x-admin-layout>

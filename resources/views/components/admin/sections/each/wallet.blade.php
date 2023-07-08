<section
    x-show="(openSidebar && isSideOption == 'projects')"
>

    <div class="pl-4 mt-3">

        <h2 class="text-white font-bold flex space-x-4 items-center m-0 p-0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white mr-2">
                <path d="M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z" />
                <path fill-rule="evenodd" d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z" clip-rule="evenodd" />
            </svg>              
            Minha Carteira
        </h2>
        <x-admin.overline />
        <div class="flex flex-col space-y-4 mt-6">

            <a href="#" class="bg-gray-800 sm:w-56 w-48 py-3 px-4 rounded-lg flex items-center hover:bg-gray-800/50">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                     class="w-4 h-4 text-white">
                    <path fill-rule="evenodd"
                          d="M19.5 21a3 3 0 003-3V9a3 3 0 00-3-3h-5.379a.75.75 0 01-.53-.22L11.47 3.66A2.25 2.25 0 009.879 3H4.5a3 3 0 00-3 3v12a3 3 0 003 3h15zm-6.75-10.5a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V10.5z"
                          clip-rule="evenodd"/>
                </svg>
                <h2 class="text-xs text-white font-bold ml-2">Adicionar nova carteira </h2>
            </a>

            <a href="#" class="bg-gray-800 sm:w-56 w-48 py-3 px-4 rounded-lg flex items-center hover:bg-gray-800/50">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                     class="w-4 h-4 text-green-500">
                    <path fill-rule="evenodd"
                          d="M19.5 21a3 3 0 003-3V9a3 3 0 00-3-3h-5.379a.75.75 0 01-.53-.22L11.47 3.66A2.25 2.25 0 009.879 3H4.5a3 3 0 00-3 3v12a3 3 0 003 3h15zm-6.75-10.5a.75.75 0 00-1.5 0v4.19l-1.72-1.72a.75.75 0 00-1.06 1.06l3 3a.75.75 0 001.06 0l3-3a.75.75 0 10-1.06-1.06l-1.72 1.72V10.5z"
                          clip-rule="evenodd"/>
                </svg>
                <h2 class="text-xs text-white font-bold ml-2">Em progresso...</h2>
            </a>

            <a href="#" class="bg-gray-800 sm:w-56 w-48 py-3 px-4 rounded-lg flex items-center hover:bg-gray-800/50">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                     class="w-4 h-4 text-yellow-500">
                    <path fill-rule="evenodd"
                          d="M15.97 2.47a.75.75 0 011.06 0l4.5 4.5a.75.75 0 010 1.06l-4.5 4.5a.75.75 0 11-1.06-1.06l3.22-3.22H7.5a.75.75 0 010-1.5h11.69l-3.22-3.22a.75.75 0 010-1.06zm-7.94 9a.75.75 0 010 1.06l-3.22 3.22H16.5a.75.75 0 010 1.5H4.81l3.22 3.22a.75.75 0 11-1.06 1.06l-4.5-4.5a.75.75 0 010-1.06l4.5-4.5a.75.75 0 011.06 0z"
                          clip-rule="evenodd"/>
                </svg>
                <h2 class="text-xs text-white font-bold ml-2">Transferir projecto</h2>
            </a>

        </div>
    </div>

</section>

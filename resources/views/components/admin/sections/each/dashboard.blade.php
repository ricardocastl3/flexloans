<section
    x-show="(openSidebar && isSideOption == 'dashboard')"
>

    <div class="pl-4 mt-3 w-full">
        <h2 class="text-white font-bold flex space-x-4 items-center m-0 p-0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white mr-2">
                <path fill-rule="evenodd" d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z" clip-rule="evenodd" />
            </svg>
            Dashboard
        </h2>
        <x-admin.overline/>

        <div class="flex flex-col space-y-4 mt-6">

            <a href="{{ route('app.dashboard') }}" class="bg-gray-800 sm:w-56 w-48 py-3 px-4 rounded-lg flex items-center hover:bg-gray-800/50">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                     class="w-4 h-4 text-white">
                    <path fill-rule="evenodd"
                          d="M19.5 21a3 3 0 003-3V9a3 3 0 00-3-3h-5.379a.75.75 0 01-.53-.22L11.47 3.66A2.25 2.25 0 009.879 3H4.5a3 3 0 00-3 3v12a3 3 0 003 3h15zm-6.75-10.5a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V10.5z"
                          clip-rule="evenodd"/>
                </svg>
                <h2 class="text-xs text-white font-bold ml-2">Painel Principal</h2>
            </a>

        </div>
        <!--<img src="{{asset('assets/womanb.png')}}" class="w-full align-bottom">-->
    </div>

</section>

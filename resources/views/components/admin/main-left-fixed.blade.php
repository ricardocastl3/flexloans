<div>

    <x-admin.sections.sidesections/>

    <!-- Side mini-menu -->
    <div class="fixed z-30 inset-y-0 w-16 bg-gray-900 border-r border-r-gray-700 p-4 sm:flex hidden flex-col items-center justify-between rounded-r-3xl">
        <div class="flex-col space-y-4 mt-8">
            <button
                :class="(isSideOption == 'news' && openSidebar) ? 'bg-violet-800 ring-violet-800 ring ring-offset-2 ring-offset-gray-900':'bg-gray-900'"
                class="border bg-gray-900 p-2 rounded-lg hover:bg-violet-800 hover:ring hover:ring-offset-2 hover:ring-violet-700 hover:ring-offset-gray-800 transition-colors duration-300"
                @click="(isSideOption == 'news' && openSidebar) ? openSidebar = false : openSidebar = true; isSideOption = 'news'"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                     class="w-4 h-4 text-white">
                    <path fill-rule="evenodd"
                          d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                          clip-rule="evenodd"/>
                </svg>
            </button>
            <button
                :class="(isSideOption == 'monitoring' && openSidebar) ? 'bg-violet-800 ring-violet-800 ring ring-offset-2 ring-offset-gray-900':'bg-gray-900'"
                class="border bg-gray-900 p-2 rounded-lg hover:bg-violet-800 hover:ring hover:ring-offset-2 hover:ring-violet-700 hover:ring-offset-gray-800 transition-colors duration-300"
                @click="(isSideOption == 'monitoring' && openSidebar) ? openSidebar = false : openSidebar = true; isSideOption = 'monitoring'">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                     class="w-4 h-4 text-white">
                    <path
                        d="M21.721 12.752a9.711 9.711 0 00-.945-5.003 12.754 12.754 0 01-4.339 2.708 18.991 18.991 0 01-.214 4.772 17.165 17.165 0 005.498-2.477zM14.634 15.55a17.324 17.324 0 00.332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 00.332 4.647 17.385 17.385 0 005.268 0zM9.772 17.119a18.963 18.963 0 004.456 0A17.182 17.182 0 0112 21.724a17.18 17.18 0 01-2.228-4.605zM7.777 15.23a18.87 18.87 0 01-.214-4.774 12.753 12.753 0 01-4.34-2.708 9.711 9.711 0 00-.944 5.004 17.165 17.165 0 005.498 2.477zM21.356 14.752a9.765 9.765 0 01-7.478 6.817 18.64 18.64 0 001.988-4.718 18.627 18.627 0 005.49-2.098zM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 001.988 4.718 9.765 9.765 0 01-7.478-6.816zM13.878 2.43a9.755 9.755 0 016.116 3.986 11.267 11.267 0 01-3.746 2.504 18.63 18.63 0 00-2.37-6.49zM12 2.276a17.152 17.152 0 012.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0112 2.276zM10.122 2.43a18.629 18.629 0 00-2.37 6.49 11.266 11.266 0 01-3.746-2.504 9.754 9.754 0 016.116-3.985z"/>
                </svg>
            </button>
            <button
                :class="(isSideOption == 'projects' && openSidebar) ? 'bg-violet-800 ring-violet-800 ring ring-offset-2 ring-offset-gray-900':'bg-gray-900'"
                class="border bg-gray-900 p-2 rounded-lg hover:bg-violet-800 hover:ring hover:ring-offset-2 hover:ring-violet-700 hover:ring-offset-gray-800 transition-colors duration-300"
                @click="(isSideOption == 'projects' && openSidebar) ? openSidebar = false : openSidebar = true; isSideOption = 'projects'">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-white">
                    <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
                    <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
                    <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
                </svg>                  
            </button>
        </div>
        <div class="p-5 rounded-full bg-gray-700">

        </div>
    </div>

</div>

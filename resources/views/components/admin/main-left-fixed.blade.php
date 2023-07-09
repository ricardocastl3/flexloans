<div>

    <x-admin.sections.sidesections/>

    <!-- Side mini-menu -->
    <div class="fixed z-30 inset-y-0 w-16 bg-gray-900 border-r border-r-gray-700 p-4 sm:flex hidden flex-col items-center justify-between rounded-r-3xl">
        <div class="flex-col space-y-4 mt-8">
            <button
                :class="(isSideOption == 'dashboard' && openSidebar) ? 'bg-violet-800 ring-violet-800 ring ring-offset-2 ring-offset-gray-900':'bg-gray-900'"
                class="border bg-gray-900 p-2 rounded-lg hover:bg-violet-800 hover:ring hover:ring-offset-2 hover:ring-violet-700 hover:ring-offset-gray-800 transition-colors duration-300"
                @click="(isSideOption == 'dashboard' && openSidebar) ? openSidebar = false : openSidebar = true; isSideOption = 'dashboard'"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                     class="w-4 h-4 text-white">
                    <path fill-rule="evenodd"
                          d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                          clip-rule="evenodd"/>
                </svg>
            </button>
            <button
                :class="(isSideOption == 'wallet' && openSidebar) ? 'bg-violet-800 ring-violet-800 ring ring-offset-2 ring-offset-gray-900':'bg-gray-900'"
                class="border bg-gray-900 p-2 rounded-lg hover:bg-violet-800 hover:ring hover:ring-offset-2 hover:ring-violet-700 hover:ring-offset-gray-800 transition-colors duration-300"
                @click="(isSideOption == 'wallet' && openSidebar) ? openSidebar = false : openSidebar = true; isSideOption = 'wallet'">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-white">
                    <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
                    <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
                    <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
                </svg>
            </button>
            <button
                :class="(isSideOption == 'solicitations' && openSidebar) ? 'bg-violet-800 ring-violet-800 ring ring-offset-2 ring-offset-gray-900':'bg-gray-900'"
                class="border bg-gray-900 p-2 rounded-lg hover:bg-violet-800 hover:ring hover:ring-offset-2 hover:ring-violet-700 hover:ring-offset-gray-800 transition-colors duration-300"
                @click="(isSideOption == 'solicitations' && openSidebar) ? openSidebar = false : openSidebar = true; isSideOption = 'solicitations'">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-white">
                    <path d="M11.644 1.59a.75.75 0 01.712 0l9.75 5.25a.75.75 0 010 1.32l-9.75 5.25a.75.75 0 01-.712 0l-9.75-5.25a.75.75 0 010-1.32l9.75-5.25z" />
                    <path d="M3.265 10.602l7.668 4.129a2.25 2.25 0 002.134 0l7.668-4.13 1.37.739a.75.75 0 010 1.32l-9.75 5.25a.75.75 0 01-.71 0l-9.75-5.25a.75.75 0 010-1.32l1.37-.738z" />
                    <path d="M10.933 19.231l-7.668-4.13-1.37.739a.75.75 0 000 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 000-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 01-2.134-.001z" />
                </svg>
            </button>

        </div>
        <div class="p-5 rounded-full bg-gray-700">

        </div>
    </div>

</div>

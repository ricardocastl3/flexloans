<div x-data>
    <!-- Header Top -->
    <div class="">

    </div>
    <!-- Header Bottom -->
    <div>

    </div>
</div>

<div x-show="openSidebar" class="sm:hidden z-10 flex absolute inset-0 bg-black/70">
    <button class="fixed right-0 top-0 m-10 bg-gray-800/70 rounded-full p-4 border border-gray-700"
    @click="openSidebar = false">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-white">
            <path fill-rule="evenodd"
                  d="M9.53 2.47a.75.75 0 010 1.06L4.81 8.25H15a6.75 6.75 0 010 13.5h-3a.75.75 0 010-1.5h3a5.25 5.25 0 100-10.5H4.81l4.72 4.72a.75.75 0 11-1.06 1.06l-6-6a.75.75 0 010-1.06l6-6a.75.75 0 011.06 0z"
                  clip-rule="evenodd"/>
        </svg>
    </button>
</div>

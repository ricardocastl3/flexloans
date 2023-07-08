<section x-show="(setTabs == 'export-projects')">
    <h2 class="text-white font-bold">Exportação de Projectos</h2>

    <div class="grid sm:grid-cols-2 grid-cols-1 gap-4 mt-8">
        <div class="flex flex-col space-y-3">
            <h2 class="font-bold text-xs text-gray-300">Projecto</h2>
            <select class="p-2 h-8 text-xs rounded-lg bg-gray-900 text-white font-bold">
                <option value="xsl">Casa Raquel Filipe</option>
            </select>
        </div>
        <div class="flex flex-col space-y-3">
            <h2 class="font-bold text-xs text-gray-300">Formato</h2>
            <select class="p-2 h-8 text-xs rounded-lg bg-gray-900 text-white font-bold">
                <option value="xsl">XSL</option>
                <option value="pdf">PDF</option>
            </select>
        </div>
        <div class="flex justify-end row-span-2 sm:col-span-2 col-span-1">
            <button class="hover:bg-gradient-to-r bg-gradient-to-tr from-green-500 via-cyan-600 to-green-600 text-white text-xs font-bold p-2 rounded-lg flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mr-2 text-white">
                    <path fill-rule="evenodd" d="M5.478 5.559A1.5 1.5 0 016.912 4.5H9A.75.75 0 009 3H6.912a3 3 0 00-2.868 2.118l-2.411 7.838a3 3 0 00-.133.882V18a3 3 0 003 3h15a3 3 0 003-3v-4.162c0-.299-.045-.596-.133-.882l-2.412-7.838A3 3 0 0017.088 3H15a.75.75 0 000 1.5h2.088a1.5 1.5 0 011.434 1.059l2.213 7.191H17.89a3 3 0 00-2.684 1.658l-.256.513a1.5 1.5 0 01-1.342.829h-3.218a1.5 1.5 0 01-1.342-.83l-.256-.512a3 3 0 00-2.684-1.658H3.265l2.213-7.191z" clip-rule="evenodd" />
                    <path fill-rule="evenodd" d="M12 2.25a.75.75 0 01.75.75v6.44l1.72-1.72a.75.75 0 111.06 1.06l-3 3a.75.75 0 01-1.06 0l-3-3a.75.75 0 011.06-1.06l1.72 1.72V3a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                </svg>                  
                <small class="font-bold">Solicitar exportação</small>
            </button>
        </div>
    </div>
</section>
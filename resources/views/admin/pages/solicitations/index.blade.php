<x-admin-layout>

    <div class="my-12">
        <h2 class="font-bold text-xl text-white">Minhas solicitações</h2>
    </div>
    <x-admin.overline />
    <div class="grid grid-cols-1 overflow-x-auto my-12">
        <table>
            <thead class="border-b border-gray-700">
                <tr class="text-left text-white">
                    <th>&nbsp;</th>
                    <th class="py-4 w-48">Conta a receber</th>
                    <th class="py-4 w-44">Valor solicitado</th>
                    <th class="py-4 w-32">Taxa</th>
                    <th class="py-4 w-32">Prazo Máximo</th>
                    <th class="py-4 w-32">Estado</th>
                    <th class="py-4">Data</th>
                </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < 3; $i++)
                <tr class="bg-gray-800/50 hover:bg-gray-800/40 text-left text-sm text-gray-300 border-b border-gray-800">
                    <td class="py-4">
                        <button class="text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </td>
                    <td class="py-4">
                        Alimentação
                    </td>
                    <td class="py-4 w-44">2.500USD</td>
                    <td class="py-4 w-32">
                        <span class="p-1 text-white text-xs font-bold bg-blue-800 rounded-lg">
                            150%
                        </span>
                    </td>
                    <td class="py-4 w-32">
                        <span class="p-1 text-white text-xs font-bold bg-orange-600 rounded-lg">
                            7 Anos
                        </span>
                    </td>
                    <td class="py-4 w-32">
                        <span class="p-1 text-white text-xs font-bold bg-gray-600 rounded-lg">
                            Pendente
                        </span>
                    </td>
                    <td class="py-4">20/08/2023</td>
                </tr>

            @endfor
            </tbody>
        </table>
    </div>


</x-admin-layout>

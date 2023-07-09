<x-admin-layout>

    <x-admin.alerts.alerts/>

    <div class="flex flex-col my-8">
        <h2 class="font-bold text-md text-white flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
            </svg>
            Deseja eliminar?
        </h2>
        <x-admin.overline/>
        <div
            class="mx-auto sm:w-96 w-full hover:scale-105 scale-100 transition-all border-2 border-violet-950 hover:border-violet-700 relative flex flex-col bg-gradient-to-r from-violet-900 via-rose-900 to-orange-900 rounded-lg px-8 py-2">

            <h2 class="font-bold text-white mt-4">{{ $wallet->name }}</h2>
            <h2 class="font-light- text-md text-gray-300 mt-4">@card_number($wallet->card_number)</h2>
            <div class="flex items-center justify-between w-full">
                <h2 class="font-bold text-white text-xl">@money($wallet->balance)</h2>
                <img src="{{ asset('assets/icons/flexwbg.png') }}" alt="" class="w-16 h-16">
            </div>
        </div>
        <div class="mx-auto sm:w-96 w-full my-4 flex justify-between items-center space-x-2">
            <form action="{{ route('wallet.destroy', $wallet->uuid) }}" method="post">
                @method('delete')
                @csrf
                <button class="flex items-center hover:bg-gray-900 transition-colors p-2 sm:w-56 w-full bg-red-800 rounded-lg border border-red-700 text-white text-xs font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                    </svg>                      
                    Eliminar
                </button>
            </form>
            <a href="{{ route('wallet.index') }}" 
            class="flex items-center hover:bg-gray-900 transition-colors p-2 sm:w-56 w-full bg-gray-800 rounded-lg border border-gray-700 text-white text-xs font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                    <path d="M9.195 18.44c1.25.713 2.805-.19 2.805-1.629v-2.34l6.945 3.968c1.25.714 2.805-.188 2.805-1.628V8.688c0-1.44-1.555-2.342-2.805-1.628L12 11.03v-2.34c0-1.44-1.555-2.343-2.805-1.629l-7.108 4.062c-1.26.72-1.26 2.536 0 3.256l7.108 4.061z" />
                </svg>
                Voltar
            </a>
        </div>
    </div>

</x-admin-layout>

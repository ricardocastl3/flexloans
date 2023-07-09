<form
    class="grid sm:grid-cols-2 grid-cols-1 my-4 gap-4 mx-4 py-4"
    action="{{ route('wallet.store') }}" method="POST">
    @csrf
    <div class="flex flex-col space-y-4">
        <label class="text-xs font-bold text-white flex">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-4 h-4 mr-2">
                <path fill-rule="evenodd"
                    d="M4.5 9.75a6 6 0 0111.573-2.226 3.75 3.75 0 014.133 4.303A4.5 4.5 0 0118 20.25H6.75a5.25 5.25 0 01-2.23-10.004 6.072 6.072 0 01-.02-.496z"
                    clip-rule="evenodd"/>
            </svg>
            Nome da carteira
        </label>
        <input value="{{ old('name') ?? $wallet->name }}" name="name" type="text" placeholder="Ex.: Conta Transporte..."
            class="p-2 text-white font-bold text-xs border-gray-900 border-2 border-b-violet-800 bg-gray-900 rounded-lg "/>
    </div>

    <div class="flex flex-col space-y-4">
        <label class="text-xs font-bold text-white flex">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-4 h-4 mr-2">
                <path
                    d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 01-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004zM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 01-.921.42z"/>
                <path fill-rule="evenodd"
                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v.816a3.836 3.836 0 00-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 01-.921-.421l-.879-.66a.75.75 0 00-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 001.5 0v-.81a4.124 4.124 0 001.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 00-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 00.933-1.175l-.415-.33a3.836 3.836 0 00-1.719-.755V6z"
                    clip-rule="evenodd"/>
            </svg>
            Saldo Inicial
        </label>
        <input value="{{ old('balance') ?? $wallet->balance }}" name="balance" type="text" placeholder="Ex.: 20000..."
            class="p-2 text-white font-bold text-xs border-gray-900 border-2 border-b-violet-800 bg-gray-900 rounded-lg "/>
    </div>

    <div class="sm:col-span-2 col-span-1">
        <x-admin.overline/>
        <button type="submit"
                class="transition-colors hover:bg-violet-900 w-full items-center justify-center flex bg-violet-700 rounded-full text-xs font-bold text-white p-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-5 h-5 text-white mr-2">
                <path d="M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z"/>
                <path fill-rule="evenodd"
                    d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z"
                    clip-rule="evenodd"/>
            </svg>
            Criar carteira
        </button>
    </div>
</form>

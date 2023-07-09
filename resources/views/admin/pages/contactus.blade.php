<x-admin-layout>

    <x-admin.alerts.alerts/>

    <div class="flex flex-col my-8 w-full">
        <h2 class="flex items-center font-bold text-md text-white">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
            </svg>
            Entre em contacto conosco
        </h2>
        <x-admin.overline/>

        <form action="{{ route('app.sendmessage') }}" method="POST">

            @csrf
            <div class="border border-gray-800 p-12 bg-gray-900 mt-16 sm:px-24 px-8 rounded-lg">

                <h2 class="font-bold text-white text-md mb-8">Detalhes da mensagem</h2>
                <x-admin.overline/>
                <div class="grid sm:grid-cols-2 grid-cols-1 gap-4 mt-8">
                    <div class="flex flex-col space-y-4">
                        <label class="flex text-xs font-bold items-center text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                                <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                            </svg>
                            Seu email
                        </label>
                        <input name="email" type="text" class="w-full bg-gray-900 font-bold text-xs text-white p-4 border-l border-l-violet-700 border-gray-900 border border-b-2 border-b-violet-700 rounded-lg outline-0"
                               placeholder="Ex.: meuemail@gmail.com">
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label class="flex text-xs font-bold items-center text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                            Assunto
                        </label>
                        <input name="subject" type="text" class="w-full bg-gray-900 font-bold text-xs text-white p-4 border-l border-l-violet-700 border-gray-900 border border-b-2 border-b-violet-700 rounded-lg outline-0"
                               placeholder="Ex.: Falha na solicitação de impréstimo.">
                    </div>
                </div>

                <div class="flex flex-col space-y-4 w-full mt-8">
                    <label class="flex text-xs font-bold items-center text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-2">
                            <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z" clip-rule="evenodd" />
                        </svg>
                        Mensagem
                    </label>
                    <textarea name="message" class="w-full h-56 text-white font-bold text-xs border border-violet-800 rounded-lg p-4 bg-gray-900" >
                </textarea>
                </div>
                <div class="mt-12">
                    <button type="submit" class="p-2 bg-violet-900 text-xs text-white font-bold flex rounded-lg hover:bg-gray-900 border border-violet-900 hover:border-violet-800 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                            <path d="M3.478 2.405a.75.75 0 00-.926.94l2.432 7.905H13.5a.75.75 0 010 1.5H4.984l-2.432 7.905a.75.75 0 00.926.94 60.519 60.519 0 0018.445-8.986.75.75 0 000-1.218A60.517 60.517 0 003.478 2.405z" />
                        </svg>
                        Enviar mensagem
                    </button>
                </div>

            </div>
        </form>

    </div>

</x-admin-layout>

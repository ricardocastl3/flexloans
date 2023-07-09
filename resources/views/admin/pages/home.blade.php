<x-admin-layout>

    <div class="">

        <div class="my-8">
            <h2 class="font-bold text-white text-xs my-4">FlexLoan, o seu impréstimo flexível.</h2>
            <h2 class="text-lg text-white font-light">Olá novamente, {{ auth()->user()->name }}</h2>
        </div>
        <div
        :class="{'gap-2':openSidebar}"  
        class="grid md:grid-cols-3 grid-cols-1 gap-4 w-full">
    
            <div class="flex justify-between items-center border border-l-2 border-l-violet-600 border-b-2 border-b-violet-600 border-gray-700 rounded-lg bg-gray-900 py-6 px-6 w-full">
                <div>
                    <h2 class="text-lg text-violet-500 font-bold">Saldo Total</h2>
                    <h2 class="font-light text-violet-700">Este é o seu saldo total</h2>
                    <h2 class="text-white my-3 font-bold text-base">0.0USD</h2>
                </div>
                <div>
                    <img width="48" height="48" src="https://img.icons8.com/fluency/48/stack-of-coins.png" alt="stack-of-coins"/>            
                </div>
            </div>
    

            <div class="flex justify-between items-center border border-l-2 border-l-violet-600 border-b-2 border-b-violet-600 border-gray-700 rounded-lg bg-gray-900 py-6 px-6 w-full">
                <div>
                    <h2 class="text-lg text-violet-500 font-bold">Impréstimo total</h2>
                    <h2 class="font-light text-violet-700">Este é o seu impréstimo total</h2>
                    <h2 class="text-white my-3 font-bold text-base">0.0USD</h2>
                </div>
                <div>
                    <img width="48" height="48" src="https://img.icons8.com/fluency/48/rebalance-portfolio.png" alt="rebalance-portfolio"/>       
                </div>
            </div>

            <div class="flex justify-between items-center border border-l-2 border-l-violet-600 border-b-2 border-b-violet-600 border-gray-700 rounded-lg bg-gray-900 py-6 px-6 w-full">
                <div>
                    <h2 class="text-lg text-violet-500 font-bold">Solicitações</h2>
                    <h2 class="font-light text-violet-700">Suas solicitações totais</h2>
                    <h2 class="text-white my-3 font-bold text-base">15</h2>
                </div>
                <div>
                    <img src="{{ asset('assets/icons/mybalance.png') }}" alt="" class="w-12 h-12">                  
                </div>
            </div>
    
        </div>
        
        <div class="flex md:flex-row flex-col items-center md:space-x-4 space-x-0 my-12">
            <a href="" class="hover:bg-gray-800 flex items-center text-xs font-bold text-white rounded-full p-4 bg-gray-900 border border-gray-700 border-b-2 border-b-violet-700">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                    <path d="M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z" />
                    <path fill-rule="evenodd" d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z" clip-rule="evenodd" />
                </svg>                  
                Adicionar nova carteira
            </a>
            <a href="" class="hover:bg-gray-800 flex items-center text-xs font-bold text-white rounded-full p-4 bg-gray-900 border border-gray-700 border-b-2 border-b-violet-700">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                    <path fill-rule="evenodd" d="M1.5 7.125c0-1.036.84-1.875 1.875-1.875h6c1.036 0 1.875.84 1.875 1.875v3.75c0 1.036-.84 1.875-1.875 1.875h-6A1.875 1.875 0 011.5 10.875v-3.75zm12 1.5c0-1.036.84-1.875 1.875-1.875h5.25c1.035 0 1.875.84 1.875 1.875v8.25c0 1.035-.84 1.875-1.875 1.875h-5.25a1.875 1.875 0 01-1.875-1.875v-8.25zM3 16.125c0-1.036.84-1.875 1.875-1.875h5.25c1.036 0 1.875.84 1.875 1.875v2.25c0 1.035-.84 1.875-1.875 1.875h-5.25A1.875 1.875 0 013 18.375v-2.25z" clip-rule="evenodd" />
                </svg>                                
                Solicitar impréstimo
            </a>
            
        </div>

        <div class="relative p-8 rounded-lg bg-gray-800/30">
    
            <div class="sm:py-12 py-6 flex sm:flex-row flex-col items-center w-full ">
                
                <div class="sm:ml-48 ml-4 sm:items-start items-center flex flex-col sm:my-0 my-8">
             
                </div>
                
            </div>
    
            <div class="flex md:flex-row flex-col justify-between items-center sm:mx-10 mx-0">
          
            </div>
    
        </div>
    
    </div>
    
</x-admin-layout>
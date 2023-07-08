<x-admin-layout>

    <div class="">

        <div class="my-8">
            <h2 class="text-lg text-white font-light">Olá novamente, {{ auth()->user()->name }}</h2>
        </div>
        <div
        :class="{'gap-2':openSidebar}"  
        class="grid md:grid-cols-3 grid-cols-1 gap-4 w-full">
    
            <div class="flex justify-between items-center border border-l-2 border-l-violet-600 border-b-2 border-b-violet-600 border-gray-700 rounded-lg bg-gray-900 py-6 px-6 w-full">
                <div>
                    <h2 class="text-lg text-violet-500 font-bold">Meu Saldo</h2>
                    <h2 class="font-light text-violet-700">Consulte seu saldo</h2>
                    <h2 class="text-white my-3 font-bold text-base">0.0USD</h2>
                </div>
                <div>
                    <img width="48" height="48" src="https://img.icons8.com/fluency/48/stack-of-coins.png" alt="stack-of-coins"/>            
                </div>
            </div>
    

            <div class="flex justify-between items-center border border-l-2 border-l-violet-600 border-b-2 border-b-violet-600 border-gray-700 rounded-lg bg-gray-900 py-6 px-6 w-full">
                <div>
                    <h2 class="text-lg text-violet-500 font-bold">Saldo Imprestado</h2>
                    <h2 class="font-light text-violet-700">Consulte seu saldo</h2>
                    <h2 class="text-white my-3 font-bold text-base">0.0USD</h2>
                </div>
                <div>
                    <img width="48" height="48" src="https://img.icons8.com/fluency/48/rebalance-portfolio.png" alt="rebalance-portfolio"/>       
                </div>
            </div>

            <div class="flex justify-between items-center border border-l-2 border-l-violet-600 border-b-2 border-b-violet-600 border-gray-700 rounded-lg bg-gray-900 py-6 px-6 w-full">
                <div>
                    <h2 class="text-lg text-violet-500 font-bold">Meu Saldo</h2>
                    <h2 class="font-light text-violet-700">Consulte seu saldo</h2>
                    <h2 class="text-white my-3 font-bold text-base">0.0USD</h2>
                </div>
                <div>
                    <img src="{{ asset('assets/icons/mybalance.png') }}" alt="" class="w-12 h-12">                  
                </div>
            </div>
    
        </div>
    
        <div class="relative sm:mt-32 mt-24 p-8 rounded-lg bg-gray-800/30">
    
            <div class="sm:py-12 py-6 flex sm:flex-row flex-col items-center w-full ">
                
                <div class="sm:ml-48 ml-4 sm:items-start items-center flex flex-col sm:my-0 my-8">
             
                </div>
                
            </div>
    
            <div class="flex md:flex-row flex-col justify-between items-center sm:mx-10 mx-0">
          
            </div>
    
        </div>
    
    </div>
    
</x-admin-layout>
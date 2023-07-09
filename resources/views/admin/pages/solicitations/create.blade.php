<x-admin-layout>

    <div class="flex flex-col my-8">
        <h2 class="font-bold text-md text-white flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                <path fill-rule="evenodd" d="M4.755 10.059a7.5 7.5 0 0112.548-3.364l1.903 1.903h-3.183a.75.75 0 100 1.5h4.992a.75.75 0 00.75-.75V4.356a.75.75 0 00-1.5 0v3.18l-1.9-1.9A9 9 0 003.306 9.67a.75.75 0 101.45.388zm15.408 3.352a.75.75 0 00-.919.53 7.5 7.5 0 01-12.548 3.364l-1.902-1.903h3.183a.75.75 0 000-1.5H2.984a.75.75 0 00-.75.75v4.992a.75.75 0 001.5 0v-3.18l1.9 1.9a9 9 0 0015.059-4.035.75.75 0 00-.53-.918z" clip-rule="evenodd" />
            </svg>              
            Fazer solicitação de empréstimo
        </h2>
        <x-admin.overline/>

        <div 
        class="grid md:grid-cols-3 grid-cols-1 gap-4 my-12">
    
            <form action="{{ route('sol.finalizing') }}" method="POST" 
            class="pt-8 sm:px-4 px-2 sm:w-64 w-full rounded-lg bg-gray-900 border-r-2 border-r-blue-500 border-t-2 border-t-blue-500 border-l-2 border-l-blue-500 border-b-2 border-b-cyan-500 border border-gray-700 hover:scale-105 transition-transform">
                
                @csrf
                <h2 class=" text-white font-bold text-md text-center flex flex-col items-center">
                    Empréstimo Flexível 
                </h2>
                <h2 class="text-center font-bold text-white">@money("3500")</h2>
                <input type="hidden" name="requested_balance" value="3500" id="">
                <x-admin.overline/>
                <div class="space-y-3">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2 text-green-600">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
                        </svg> 
                        <small class="text-xs font-bold text-white">Taxa: 5%</small>
                        <input type="hidden" name="rate" value="5" id="">                     
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2 text-green-600">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
                        </svg> 
                        <small class="text-xs font-bold text-white">Prazo máximo: 8 meses</small> 
                        <input type="hidden" name="deadline" value="8 meses" id="">                    
                    </div>
                </div>
                <button type="submit" class="hover:bg-cyan-900 animate-pulse my-4 text-xs rounded-lg p-2 font-bold text-white border-b-2 border-b-cyan-800 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                        <path d="M21 6.375c0 2.692-4.03 4.875-9 4.875S3 9.067 3 6.375 7.03 1.5 12 1.5s9 2.183 9 4.875z" />
                        <path d="M12 12.75c2.685 0 5.19-.586 7.078-1.609a8.283 8.283 0 001.897-1.384c.016.121.025.244.025.368C21 12.817 16.97 15 12 15s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.285 8.285 0 001.897 1.384C6.809 12.164 9.315 12.75 12 12.75z" />
                        <path d="M12 16.5c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 001.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 001.897 1.384C6.809 15.914 9.315 16.5 12 16.5z" />
                        <path d="M12 20.25c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 001.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 001.897 1.384C6.809 19.664 9.315 20.25 12 20.25z" />
                    </svg>  
                    Escolher
                </button>
            </form>
    
            <form action="{{ route('sol.finalizing') }}" method="POST" 
            class="pt-8 sm:px-4 px-2 sm:w-64 w-full rounded-lg bg-gray-900 border-r-2 border-r-blue-500 border-t-2 border-t-blue-500 border-l-2 border-l-blue-500 border-b-2 border-b-cyan-500 border border-gray-700 hover:scale-105 transition-transform">
                
                @csrf
                <h2 class=" text-white font-bold text-md text-center flex flex-col items-center">
                    Empréstimo Prata  
                </h2>
                <h2 class="text-center font-bold text-white">@money("4500")</h2>
                <input type="hidden" name="requested_balance" value="4500" id="">
                <x-admin.overline/>
                <div class="space-y-3">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2 text-green-600">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
                        </svg> 
                        <small class="text-xs font-bold text-white" name="rate">Taxa: 8%</small>
                        <input type="hidden" name="rate" value="8" id="">                     
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2 text-green-600">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
                        </svg> 
                        <small class="text-xs font-bold text-white">Prazo máximo: 2 meses</small> 
                        <input type="hidden" name="deadline" value="2 meses" id="">                    
                    </div>
                </div>
                <button type="submit" class="hover:bg-cyan-900 animate-pulse my-4 text-xs rounded-lg p-2 font-bold text-white border-b-2 border-b-cyan-800 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                        <path d="M21 6.375c0 2.692-4.03 4.875-9 4.875S3 9.067 3 6.375 7.03 1.5 12 1.5s9 2.183 9 4.875z" />
                        <path d="M12 12.75c2.685 0 5.19-.586 7.078-1.609a8.283 8.283 0 001.897-1.384c.016.121.025.244.025.368C21 12.817 16.97 15 12 15s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.285 8.285 0 001.897 1.384C6.809 12.164 9.315 12.75 12 12.75z" />
                        <path d="M12 16.5c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 001.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 001.897 1.384C6.809 15.914 9.315 16.5 12 16.5z" />
                        <path d="M12 20.25c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 001.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 001.897 1.384C6.809 19.664 9.315 20.25 12 20.25z" />
                    </svg>  
                    Escolher
                </button>
            </form>
            
      
            <form action="{{ route('sol.finalizing') }}" method="POST" 
            class="pt-8 sm:px-4 px-2 sm:w-64 w-full rounded-lg bg-gray-900 border-r-2 border-r-blue-500 border-t-2 border-t-blue-500 border-l-2 border-l-blue-500 border-b-2 border-b-cyan-500 border border-gray-700 hover:scale-105 transition-transform">
                
                @csrf
                <h2 class=" text-white font-bold text-md text-center flex flex-col items-center">
                    Empréstimo GOLD  
                </h2>
                <h2 class="text-center font-bold text-white">@money("5000")</h2>
                <input type="hidden" name="requested_balance" value="5000" id="">
                <x-admin.overline/>
                <div class="space-y-3">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2 text-green-600">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
                        </svg> 
                        <small class="text-xs font-bold text-white" name="rate">Taxa: 12%</small>
                        <input type="hidden" name="rate" value="12" id="">                     
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2 text-green-600">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
                        </svg> 
                        <small class="text-xs font-bold text-white">Prazo máximo: 1 Ano</small> 
                        <input type="hidden" name="deadline" value="1 Ano" id="">                    
                    </div>
                </div>
                <button type="submit" class="hover:bg-cyan-900 animate-pulse my-4 text-xs rounded-lg p-2 font-bold text-white border-b-2 border-b-cyan-800 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                        <path d="M21 6.375c0 2.692-4.03 4.875-9 4.875S3 9.067 3 6.375 7.03 1.5 12 1.5s9 2.183 9 4.875z" />
                        <path d="M12 12.75c2.685 0 5.19-.586 7.078-1.609a8.283 8.283 0 001.897-1.384c.016.121.025.244.025.368C21 12.817 16.97 15 12 15s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.285 8.285 0 001.897 1.384C6.809 12.164 9.315 12.75 12 12.75z" />
                        <path d="M12 16.5c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 001.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 001.897 1.384C6.809 15.914 9.315 16.5 12 16.5z" />
                        <path d="M12 20.25c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 001.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 001.897 1.384C6.809 19.664 9.315 20.25 12 20.25z" />
                    </svg>  
                    Escolher
                </button>
            </form>
    
        </div>

    </div>

</x-admin-layout>
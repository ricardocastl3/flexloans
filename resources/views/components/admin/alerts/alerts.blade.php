@if(session()->has('error'))
    <div class="z-40 fixed grid grid-cols-1 inset-x-0 top-0" x-ref="panelError">
        <div class="px-8 bg-red-900 border-b-2 border-red-600 top-0 w-full flex items-center justify-between">
            <h2 class="py-6 text-white font-bold text-xs flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                    <path fill-rule="evenodd" d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                </svg>
                {{ session()->get('error') }}
            </h2>
            <h2 class="font-bold text-white text-lg cursor-pointer" @click="$refs.panelError.classList.add('hidden')">x</h2>
        </div>
    </div>
@endif

@if($errors->any())
    <div class="z-40 fixed grid grid-cols-1 inset-x-0 top-0" x-ref="panelError">
        <div class="px-8 bg-red-900 border-b-2 border-red-600 top-0 w-full flex items-center justify-between">
            <div class="flex items-start md:items-center md:space-x-3 space-x-0 flex-col md:flex-row">
                @foreach ($errors->all() as $error)
                    <h2 class="py-6 text-white font-bold text-xs flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                            <path fill-rule="evenodd" d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                        </svg>
                        {{ $error }}
                    </h2>
                @endforeach
            </div>
            <h2 class="font-bold text-white text-lg cursor-pointer" @click="$refs.panelError.classList.add('hidden')">x</h2>
        </div>
    </div>
@endif

@if(session()->has('success'))
    <div class="z-40 fixed grid grid-cols-1 inset-x-0 top-0" x-ref="panelSuccess">
        <div class="px-8 bg-green-900 border-b-2 border-green-600 top-0 w-full flex items-center justify-between">
            <h2 class="py-6 text-white text-xs font-bold flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                    <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                </svg>
                {{ session()->get('success') }}
            </h2>
            <h2 class="font-bold text-white text-lg cursor-pointer" @click="$refs.panelSuccess.classList.add('hidden')">x</h2>
        </div>
    </div>
@endif


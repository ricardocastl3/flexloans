<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">

<div class="min-h-screen bg-gray-900" x-data="setup" >

    <!-- Loading Page -->
    <x-admin.load-page />

    <div class="flex">

        <x-admin.headertop-principal/>

        <x-admin.main-left-fixed/>

        <!-- Page Content -->
        <main class="inset-x-0 mt-16 mb-56 sm:ml-44 ml-8 sm:mr-28 mr-8 w-full">
            {{ $slot }}
        </main>

        <x-admin.mobile-header/>
    </div>

    @stack('modals')

</div>

@stack('scripts')

@livewireScripts

<x-admin.footer />

</body>
</html>

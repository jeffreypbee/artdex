<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://kit.fontawesome.com/1b886f8acb.js" crossorigin="anonymous"></script>
    </head>
    <body class="font-sans antialiased bg-slate-900 text-white">
        <div class="min-h-screen flex">
            {{-- <livewire:layout.navigation /> --}}

            {{-- <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <header class="flex flex-col shrink-0"
                style="width: 200px">
                <div class="font-bold text-lg">
                    <a href="/">{{config('app.name')}}</a>
                </div>
                <nav class="flex flex-col">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>

                        {{ __('HOME') }}
                        <i class="fa-solid fa-home"></i>
                    </x-nav-link>
                    <x-nav-link :href="route('gallery')" :active="request()->routeIs('gallery')" wire:navigate>
                        {{ __('GALLERY') }}
                        <i class="fa-solid fa-palette"></i>

                    </x-nav-link>
                    <x-nav-link :href="route('dex')" :active="request()->routeIs('dex')" wire:navigate>
                        {{ __('DEX') }}
                        <i class="fa-solid fa-book"></i>

                    </x-nav-link>
                </nav>
            </header>

            <!-- Page Content -->
            <main class="p-5">
                <livewire:completion-widget />
                {{ $slot }}
            </main>
        </div>
    </body>
</html>

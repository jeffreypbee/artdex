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
    <body class="h-full flex flex-col justify-between font-sans antialiased bg-slate-900 text-white">
        <div class="h-full flex flex-col">
            {{-- <livewire:layout.navigation /> --}}

            {{-- <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}


            <header class="w-full">
                <livewire:head-banner />
            </header>

            <div class="md:flex">
                <div>
                    <nav class="sticky top-2 w-60 flex flex-col shrink-0">
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
                        <x-nav-link :href="route('stats')" :active="request()->routeIs('stats')" wire:navigate>
                            {{ __('STATS') }}
                            <i class="fa-solid fa-chart-pie"></i>

                        </x-nav-link>
                    </nav>
                </div>


                <!-- Page Content -->
                <main class="p-5 w-full">
                    {{ $slot }}
                </main>

                <aside class="w-60">
                    <div class="sticky top-2">
                        <livewire:completion-matrix />
                    </div>
                </aside>
            </div>


        </div>
        <footer class="w-full h-72 flex flex-col justify-end items-center p-5 bg-gradient-to-b from-transparent to-black">
                <div class="flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                        {{ __('HOME') }}
                    </x-nav-link>
                    <x-nav-link :href="route('gallery')" :active="request()->routeIs('gallery')" wire:navigate>
                        {{ __('GALLERY') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dex')" :active="request()->routeIs('dex')" wire:navigate>
                        {{ __('DEX') }}
                    </x-nav-link>
                    <x-nav-link :href="route('stats')" :active="request()->routeIs('stats')" wire:navigate>
                        {{ __('STATS') }}
                    </x-nav-link>
                </div>
                Copyright &copy; {{date('Y')}} Jeffrey Bee
            </footer>
    </body>
</html>

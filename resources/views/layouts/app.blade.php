<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
         <!-- Styles -->
        @livewireStyles
        @powerGridStyles
    </head>
    <body class="font-sans antialiased">
        <div class="p-20s"></div>
        <div class="min-h-screen bg-gray-100">
            <main class="bg-gray-100 white:bg-gray-800 rounded-2xl h-screen overflow-hidden relative">
                
                <div class="flex items-start justify-between">
                    
                {{-- Navigation Bar --}}
                @include('layouts.navigation')
                
                <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
                    
                    <header class="w-full shadow-lg bg-white white:bg-gray-700 items-center h-16 rounded-2xl ">
                        <div class="relative  flex flex-col justify-center h-full px-3 mx-auto flex-center">
                            <div class="relative items-center pl-1 flex w-full lg:max-w-68 sm:pr-2 sm:ml-0">
                                <div class="container relative left-0  flex w-3/4 h-auto h-full">
                                    <div class="relative">
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-500 white:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                        </div>
                                        <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-2xl border border-gray-300 focus:ring-blue-500 focus:border-blue-500 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" placeholder="Search">
                                    </div>
                                </div>
                                
                                <div class="relative p-1 flex items-center justify-end w-1/4 ml-5 mr-4 sm:mr-0 sm:right-auto">
                                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                                        <x-dropdown align="right" width="48">
                                            <x-slot name="trigger">
                                                <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                                    <div>{{ Auth::user()->name }}</div>
                        
                                                    <div class="ml-1">
                                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    </div>
                                                </button>
                                            </x-slot>
                        
                                            <x-slot name="content">
                                                <!-- Authentication -->
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                        
                                                    <x-dropdown-link :href="route('logout')"
                                                            onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                                        {{ __('Log Out') }}
                                                    </x-dropdown-link>
                                                </form>
                                            </x-slot>
                                        </x-dropdown>
                                    </div>
                                    {{-- <a href="#" class="block relative">
                                        <img alt="profil" src="/images/person/1.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </header>

                    {{-- MAIN Start--}}
                    {{ $slot }}
                    {{-- MAIN END --}}

                </div>
            </main>
        </div>
        <!-- Scripts -->
        @livewireScripts
        @powerGridScripts
    </body>
</html>

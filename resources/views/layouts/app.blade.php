<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ dark: localStorage.getItem('theme') === 'dark' }" :class="{ 'dark': dark }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Rafly Juliano - Web Developer'))</title>
    <meta name="description" content="@yield('meta_description', 'Portfolio Rafly Juliano, Web Developer, Project, Blog, Contact')">
    <meta name="keywords" content="@yield('meta_keywords', 'Rafly Juliano, Web Developer, Portfolio, Laravel, Tailwind, Project, Blog')">
    <meta property="og:title" content="@yield('og_title', 'Rafly Juliano - Web Developer')">
    <meta property="og:description" content="@yield('og_description', 'Portfolio Rafly Juliano, Web Developer, Project, Blog, Contact')">
    <meta property="og:image" content="@yield('og_image', asset('images/rafly.jpg.jpeg'))">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous">
    
    <!-- Preload critical resources -->
    <link rel="preload" href="{{ asset('images/rafly.jpg.jpeg') }}" as="image">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
</head>

<body class="bg-gray-50 text-gray-900 font-sans antialiased">
    <div id="app">
        <!-- Custom Navbar -->
        <nav x-data="{ open: false }" class="bg-white bg-gradient-to-b from-white to-purple-50 shadow-md rounded-b-2xl border-b-4 border-b-gradient-to-r from-purple-500 to-pink-500">
            <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
                <a href="/" class="text-2xl font-bold bg-gradient-to-r from-purple-500 to-pink-500 bg-clip-text text-transparent drop-shadow">Rafly</a>
                <!-- Hamburger Button (Mobile) -->
                <button @click="open = !open" class="md:hidden text-purple-600 focus:outline-none" aria-label="Toggle menu">
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <!-- Desktop Menu -->
                <div class="space-x-4 flex items-center md:flex hidden">
                    <a href="#projects" class="text-gray-700 hover:text-purple-600 transition-colors duration-200 border-b-2 border-transparent hover:border-purple-500">Projects</a>
                    <a href="{{ route('skill') }}" class="text-gray-700 hover:text-purple-600 transition-colors duration-200 border-b-2 border-transparent hover:border-purple-500">Skills</a>
                    <a href="#contact" class="text-gray-700 hover:text-purple-600 transition-colors duration-200 border-b-2 border-transparent hover:border-purple-500">Contact</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-purple-600 transition-colors duration-200 border-b-2 border-transparent hover:border-purple-500">About Me</a>
                    <a href="{{ route('blog.index') }}" class="text-gray-700 hover:text-purple-600 transition-colors duration-200 border-b-2 border-transparent hover:border-purple-500">Blog</a>
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-indigo-600">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-gray-700 hover:text-red-600">Logout</button>
                        </form>
                    @endauth
                </div>
            </div>
            <!-- Mobile Menu -->
            <div x-show="open" @click.away="open = false" class="md:hidden px-4 pb-4">
                <div class="flex flex-col space-y-2 bg-white/90 rounded-xl shadow-lg p-4 mt-2">
                    <a href="#projects" class="text-gray-700 hover:text-purple-600 transition-colors duration-200">Projects</a>
                    <a href="{{ route('skill') }}" class="text-gray-700 hover:text-purple-600 transition-colors duration-200">Skills</a>
                    <a href="#contact" class="text-gray-700 hover:text-purple-600 transition-colors duration-200">Contact</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-purple-600 transition-colors duration-200">About Me</a>
                    <a href="{{ route('blog.index') }}" class="text-gray-700 hover:text-purple-600 transition-colors duration-200">Blog</a>
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-indigo-600">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-gray-700 hover:text-red-600">Logout</button>
                        </form>
                    @endauth
                </div>
            </div>
        </nav>

        {{-- Optional Header --}}
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        {{-- Main Content --}}
        <main class="py-10">
            @yield('content')
        </main>
    </div>
</body>

</html>

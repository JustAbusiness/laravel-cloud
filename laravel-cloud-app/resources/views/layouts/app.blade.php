<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">
</head>
<style>
    .images {
        background-image: url('https://images.unsplash.com/photo-1530893609608-32a9af3aa95c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fGxhcHRvcHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60');
        opacity: 0.8;
    }
    
    .box {
        margin-left: 10%;
        width:20%
    }
</style>
<body class="bg-gray-200 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-blue-900 py-4">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    <a class="no-underline hover:underline" href="/">Home</a>
                    <a class="no-underline hover:underline" href="/shop">Shop</a>
                    <a class="no-underline hover:underline" href="/cart">Cart</a>
                </nav>
            </div>
        </header>
        @yield('content')

    </div>
</body>
</html>
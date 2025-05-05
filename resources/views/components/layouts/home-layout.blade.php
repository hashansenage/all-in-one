<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @class(['dark'=> ($appearance ?? 'system') == 'dark'])>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Default Title' }}</title>
    <meta name="description" content="{{ $description ?? 'Default site description.' }}">
    <meta name="keywords" content="{{ $keywords ?? 'default, keywords' }}">

    @vite(['resources/css/frontend.css', "resources/js/frontend.js"])
</head>

<body class="font-sans antialiased" x-data="{ cartOpen: false, cartCount: 2 }" x-init="$watch('cartOpen', value => console.log('Cart is', value ? 'open' : 'closed'))">
    <!-- Navbar -->
    <nav class="bg-white shadow-md p-4 flex justify-between items-center">
        <div class="text-xl font-bold">MyShop</div>
        <div class="space-x-4">
            <a href="#" class="text-gray-700 hover:text-blue-500">Home</a>
            <a href="#" class="text-gray-700 hover:text-blue-500">Shop</a>
            <a href="#" class="text-gray-700 hover:text-blue-500">Contact</a>
        </div>
        
        <div class="relative cursor-pointer flex gap-3" @click="cartOpen = !cartOpen">
        {{ Auth::user() ? Auth::user()->name : 'Guest' }}
            <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 7h13L17 13M7 13H5.4M17 13l1.5 7"></path>
            </svg>
            <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full px-1">
                <span x-text="cartCount"></span>
            </span>
        </div>
    </nav>
    
    
    {{ $slot }}
</body>

</html>

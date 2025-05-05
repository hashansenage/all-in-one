<x-layouts.home-layout>
    <x-slot name="title">Home - My Site</x-slot>
    <x-slot name="description">Welcome to the homepage of My Site with excellent features.</x-slot>
    <x-slot name="keywords">home, my site, features</x-slot>

    

    <!-- Hero -->
    <header class="text-center py-20 bg-gradient-to-r from-blue-500 to-indigo-600 text-white">
        <h1 class="text-5xl font-bold mb-4">Welcome to MyShop</h1>
        <p class="text-xl">Find your perfect product today.</p>
    </header>

    <!-- Featured Products -->
    <section class="max-w-7xl mx-auto px-4 py-12">
        <h2 class="text-3xl font-semibold mb-8 text-center">Featured Products</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Product Card -->
            <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
                <img src="https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM=" alt="Product" class="rounded mb-4">
                <h3 class="text-xl font-semibold mb-2">Product 1</h3>
                <p class="text-gray-600 mb-2">$29.99</p>
                <button @click="cartCount++" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add to Cart</button>
            </div>
            <!-- Repeat for more products -->
            <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
                <img src="https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM=" alt="Product" class="rounded mb-4">
                <h3 class="text-xl font-semibold mb-2">Product 2</h3>
                <p class="text-gray-600 mb-2">$49.99</p>
                <button @click="cartCount++" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add to Cart</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
                <img src="https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM=" alt="Product" class="rounded mb-4">
                <h3 class="text-xl font-semibold mb-2">Product 3</h3>
                <p class="text-gray-600 mb-2">$19.99</p>
                <button @click="cartCount++" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add to Cart</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t py-6 text-center text-gray-500 text-sm">
        &copy; 2025 MyShop. All rights reserved.
    </footer>
</x-layouts.home-layout>
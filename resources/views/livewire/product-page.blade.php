<section class="min-h-screen bg-gray-50 py-16 px-6 flex flex-col items-center justify-start">

    <!-- 🔹 Section Header -->
    <div class="text-center mb-14">
        <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-800 mb-3">
            Shop the Latest Trends
        </h2>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto">
            Discover our newest arrivals and best-selling products — curated just for you.
        </p>
        <div class="mt-5 w-24 h-1 bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 mx-auto rounded-full"></div>
    </div>

    <!-- 🔹 Products Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10 max-w-7xl w-full">

        @foreach($products as $product)
            @php
                $images = is_string($product->images) ? json_decode($product->images, true) : $product->images;
                $image = $images[0] ?? null;

                // Example: simulate old price (10–25% higher)
                $oldPrice = $product->price * (1 + rand(10, 25) / 100);
            @endphp

            <div class="bg-white rounded-2xl shadow-md hover:shadow-2xl transition duration-300 overflow-hidden group relative">

                <!-- Product Image -->
                <div class="relative w-full h-64 bg-gray-100 overflow-hidden">
                    @if($image)
                        <img src="{{ asset('storage/' . ltrim($image, '/')) }}" 
                             alt="{{ $product->name }}" 
                             loading="lazy"
                             class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                             onerror="this.src='{{ asset('images/no-image.png') }}'">
                    @else
                        <div class="flex items-center justify-center w-full h-full">
                            <i class="fas fa-box text-5xl text-gray-400"></i>
                        </div>
                    @endif

                    <!-- Hover overlay -->
                    <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition duration-300"></div>

                    <!-- Quick View Button -->
                    <a href="{{ route('product.details', $product->id) }}" 
                       class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-white text-gray-800 font-semibold text-sm px-4 py-2 rounded-full shadow-md opacity-0 group-hover:opacity-100 transition duration-300 hover:bg-gray-100">
                        View Details
                    </a>

                    <!-- Discount Badge -->
                    <span class="absolute top-4 right-4 bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded-full shadow">
                        -{{ rand(10, 25) }}%
                    </span>
                </div>

                <!-- Product Details -->
                <div class="p-5 text-center">
                    <h3 class="text-lg font-semibold text-gray-800 group-hover:text-[#f9444b] transition">
                        {{ $product->name }}
                    </h3>
                    <p class="text-sm text-gray-500 mt-1 mb-2">
                        {{ $product->category->name ?? 'General' }}
                    </p>

                    <!-- 💰 Modern Price Display -->
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-xl font-bold text-[#f9444b]">${{ number_format($product->price, 2) }}</span>
                        <span class="text-sm text-gray-400 line-through">${{ number_format($oldPrice, 2) }}</span>
                    </div>
                </div>

                <!-- Add to Cart -->
                <div class="absolute inset-x-0 bottom-0 bg-[#f9444b] text-white text-center py-2 text-sm font-semibold rounded-b-2xl opacity-0 group-hover:opacity-100 transition duration-300 cursor-pointer">
                    Add to Cart
                </div>
            </div>
        @endforeach

    </div>
</section>

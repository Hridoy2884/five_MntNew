<section class="min-h-screen bg-gray-50 flex flex-col items-center justify-start">

    <!-- 🔹 Banner Section -->
    <div class="relative w-full h-72 flex flex-col items-center justify-center text-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-[#f9444b] via-[#ff6a4d] to-[#ffb84d] opacity-90"></div>

        <!-- Animated Glow Shapes -->
        <div class="absolute top-10 left-10 w-16 h-16 bg-white/20 rounded-full blur-2xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-24 h-24 bg-white/10 rounded-full blur-3xl animate-ping"></div>

        <!-- Logo and Title -->
        <div class="relative z-10 flex flex-col items-center justify-center space-y-4">
            <img src="{{ asset('storage/images/5-min-logo.png') }}" 
                 alt="5-Minutes Logo" 
                 class="h-16 sm:h-20 md:h-24 object-contain transition-all duration-300 drop-shadow-lg">

            <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-wide drop-shadow-lg">
                Five Minutes Convenience Shop
            </h1>

            <p class="text-white/90 text-lg md:text-xl font-medium max-w-2xl">
                Fresh. Fast. Friendly — shop smarter with style.
            </p>
        </div>
    </div>

    <!-- 🔹 Product Details Card -->
    <div class="max-w-6xl w-full bg-white rounded-3xl shadow-lg overflow-hidden flex flex-col md:flex-row -mt-16 relative z-10">

        <!-- 🖼️ Product Images -->
        <div class="md:w-1/2 bg-gray-100 flex items-center justify-center p-6">
            @php
                $images = is_string($product->images) ? json_decode($product->images, true) : $product->images;
                $image = $images[0] ?? null;
            @endphp

            @if($image)
                <img src="{{ asset('storage/' . ltrim($image, '/')) }}" 
                     alt="{{ $product->name }}" 
                     class="rounded-2xl w-full h-[400px] object-cover shadow-md hover:scale-105 transition duration-500"
                     onerror="this.src='{{ asset('images/no-image.png') }}'">
            @else
                <i class="fas fa-box text-7xl text-gray-400"></i>
            @endif
        </div>

        <!-- 🧾 Product Info -->
        <div class="md:w-1/2 p-8 flex flex-col justify-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                {{ $product->name }}
            </h1>

            <p class="text-gray-600 mb-4 text-lg leading-relaxed">
                {{ $product->description ?? 'No description available for this product.' }}
            </p>

            <div class="flex items-center space-x-4 mb-6">
                <span class="text-3xl font-bold text-[#f9444b]">
                    ${{ number_format($product->price, 2) }}
                </span>
                <span class="text-sm bg-gray-100 text-gray-600 px-3 py-1 rounded-full">
                    {{ $product->category->name ?? 'General' }}
                </span>
            </div>

            <div class="flex items-center gap-4">
                <button class="bg-[#f9444b] hover:bg-[#e03840] text-white px-6 py-3 rounded-full font-semibold shadow-md transition">
                    Add to Cart
                </button>

                <a href="{{ url()->previous() }}" 
                   class="border border-gray-300 text-gray-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
                    Back to Shop
                </a>
            </div>
        </div>
    </div>
</section>

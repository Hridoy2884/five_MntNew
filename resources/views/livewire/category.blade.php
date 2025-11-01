<section class="min-h-screen flex flex-col items-center justify-center px-6 py-12">
    
    <!-- Intro Text -->
    <div class="text-center mb-10">
        <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-800 drop-shadow-sm">
            Explore Our Categories
        </h2>
        <p class="mt-3 text-lg text-gray-600 max-w-2xl mx-auto">
            Discover fresh deals and handpicked items organized for your convenience.
        </p>
        <!-- Decorative line -->
        <div class="mt-4 w-20 h-1 bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 mx-auto rounded-full"></div>
    </div>

    <!-- Categories Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-8 max-w-6xl w-full">
        @foreach($categories as $category)
            <div class="group relative bg-white rounded-2xl shadow-lg overflow-hidden cursor-pointer transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                <div class="relative w-full h-48 flex items-center justify-center bg-gray-100">
                    @if($category->image)
                        <img src="{{ asset('storage/' . $category->image) }}" 
                            alt="{{ $category->name }}" 
                            class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    @else
                        <i class="fas fa-tag text-6xl text-gray-400"></i>
                    @endif
                    
                    <!-- Gradient overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent opacity-70 group-hover:opacity-90 transition duration-500"></div>

                    <!-- Category name -->
                    <h3 class="absolute bottom-4 text-lg font-bold text-white drop-shadow-md">
                        {{ $category->name }}
                    </h3>
                </div>
            </div>
        @endforeach
    </div>
</section>

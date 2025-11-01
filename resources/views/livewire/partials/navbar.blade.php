<div class="sticky top-0 z-50">

    <!-- 🔔 Breaking News Bar -->
    <div id="breaking-news"
        class="w-full bg-gradient-to-r from-pink-600 via-red-500 to-yellow-500
                text-white text-sm sm:text-base font-medium py-2 px-4 overflow-hidden relative text-center">
    </div>

    <script>
        const newsMessages = [
            "🛒 Welcome to 5-Minutes! Fresh products, hot deals",
            "🔥 Hot Deal: Get 20% off on selected products today!",
            "🥗 Fresh vegetables and fruits delivered to your doorstep!"
        ];

        let currentIndex = 0;
        const newsBar = document.getElementById("breaking-news");

        setInterval(() => {
            currentIndex = (currentIndex + 1) % newsMessages.length;
            newsBar.textContent = newsMessages[currentIndex];
        }, 3000);
    </script>

    <!-- Mobile Floating Bottom Navigation -->
    <div class="fixed bottom-4 left-1/2 transform -translate-x-1/2 w-[95%] max-w-lg bg-white rounded-3xl shadow-xl border border-gray-200 md:hidden z-50">
        <div class="flex justify-between items-center px-6 py-2 relative">

            <!-- Category -->
            <a href="{{ route('category') }}" 
               class="flex flex-col items-center text-gray-500 hover:text-[#f9444b] transition-colors duration-200 {{ request()->routeIs('category') ? 'text-[#f9444b]' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <span class="text-xs">Category</span>
            </a>

       <!-- Realistic Cart -->
<a href="#" 
   class="flex flex-col items-center text-gray-500 hover:text-[#f9444b] transition-colors duration-200 relative">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mb-1" fill="currentColor" viewBox="0 0 24 24">
        <!-- Basket -->
        <path d="M3 3h2l1 14h14l1-8H7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
        <!-- Handle -->
        <path d="M16 3a2 2 0 1 1 0 4h-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
        <!-- Wheels -->
        <circle cx="9" cy="21" r="1.5" fill="currentColor"/>
        <circle cx="18" cy="21" r="1.5" fill="currentColor"/>
    </svg>
    <span class="text-xs">Cart</span>
    <span class="absolute -top-1 -right-1 text-white bg-[#f9444b] text-xs rounded-full px-1">0</span>
</a>


            <!-- Center Logo: Home -->
            <a href="{{ route('home') }}" 
               class="flex flex-col items-center -mt-8 text-gray-500 hover:text-[#f9444b] transition-all duration-200 {{ request()->routeIs('home') ? 'text-[#f9444b]' : '' }}">
                <div class="w-20 h-20 bg-white rounded-full shadow-md flex items-center justify-center transform transition-transform duration-200 hover:scale-110 active:scale-95">
                    <img src="{{ asset('storage/images/5-min-logo.png') }}" alt="Logo" class="h-12 w-auto object-contain">
                </div>
                <span class="text-xs mt-1">Home</span>
            </a>

            <!-- Products -->
            <a href="{{ route('products') }}" 
               class="flex flex-col items-center text-gray-500 hover:text-[#f9444b] transition-colors duration-200 {{ request()->routeIs('products') ? 'text-[#f9444b]' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 13V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 13v6a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-6" />
                </svg>
                <span class="text-xs">Products</span>
            </a>

            <!-- Lottery -->
            <a href="#" 
               class="flex flex-col items-center text-gray-500 hover:text-[#f9444b] transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                    <path d="M12 6v6l4 2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="text-xs">Lottery</span>
            </a>

            <!-- Login -->
            <a href="#" class="flex flex-col items-center text-gray-500 hover:text-[#f9444b] transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-9A2.25 2.25 0 002.25 5.25v13.5A2.25 2.25 0 004.5 21h9a2.25 2.25 0 002.25-2.25V15M21 12H9m0 0l3-3m-3 3l3 3" />
                </svg>
                <span class="text-xs">Login</span>
            </a>

        </div>
    </div>

</div>

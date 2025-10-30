<header class="sticky top-0 z-50 bg-white shadow-md" style="font-family: 'Inter', sans-serif;">
    <nav class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">

        <!-- Brand -->
        <a href="#" class="text-3xl font-extrabold tracking-tight text-[#f9444b]">
            5-Minutes
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center gap-6">

            <a href="#" class="text-gray-800 hover:text-[#f9444b] font-medium">Home</a>
            <a href="#" class="text-gray-800 hover:text-[#f9444b] font-medium">Products</a>
            <a href="#" class="text-gray-800 hover:text-[#f9444b] font-medium">Offers</a>
            <a href="#" class="text-gray-800 hover:text-[#f9444b] font-medium">Lottery</a>

            <!-- Search Bar -->
            <input type="text" placeholder="Search..." 
                class="px-3 py-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#f9444b]">

            <!-- Cart Icon -->
            <a href="#" class="relative flex items-center text-gray-800 hover:text-[#f9444b]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.6 8H19m-7-8V6a2 2 0 1 1 4 0v7" />
                </svg>
                <span class="absolute -top-2 -right-2 text-white text-xs font-bold rounded-full px-1.5 bg-[#f9444b]">0</span>
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="md:hidden text-gray-800 hover:text-[#f9444b] focus:outline-none">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

    </nav>

    <!-- Mobile Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-40 hidden z-40"></div>

    <!-- Mobile Slide Menu -->
    <div id="mobile-menu"
        class="fixed top-0 right-0 h-full w-64 bg-[#f9444b] text-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50">
        <div class="flex justify-between items-center p-4 border-b border-white/20">
            <h2 class="text-xl font-bold">Menu</h2>
            <button id="close-btn" class="text-white text-2xl">&times;</button>
        </div>
        <div class="flex flex-col gap-4 p-6">
            <a href="#" class="hover:underline">Home</a>
            <a href="#" class="hover:underline">Products</a>
            <a href="#" class="hover:underline">Offers</a>
            <a href="#" class="hover:underline">Lottery</a>

            <!-- Mobile Search -->
            <input type="text" placeholder="Search..." 
                class="px-3 py-1 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#ffffff] text-black">

            <!-- Mobile Cart -->
            <a href="#" class="flex items-center gap-2 hover:underline">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.6 8H19m-7-8V6a2 2 0 1 1 4 0v7" />
                </svg>
                Cart (0)
            </a>
        </div>
    </div>
</header>

<!-- JS for Mobile Toggle -->
<script>
    const menuBtn = document.getElementById("menu-btn");
    const closeBtn = document.getElementById("close-btn");
    const mobileMenu = document.getElementById("mobile-menu");
    const overlay = document.getElementById("overlay");

    const openMenu = () => {
        mobileMenu.classList.remove("translate-x-full");
        mobileMenu.classList.add("translate-x-0");
        overlay.classList.remove("hidden");
    };

    const closeMenu = () => {
        mobileMenu.classList.add("translate-x-full");
        mobileMenu.classList.remove("translate-x-0");
        overlay.classList.add("hidden");
    };

    menuBtn.addEventListener("click", openMenu);
    closeBtn.addEventListener("click", closeMenu);
    overlay.addEventListener("click", closeMenu);
</script>

<!-- Alpine.js (optional for future dropdowns) -->
<script src="//unpkg.com/alpinejs" defer></script>

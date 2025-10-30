<div class="min-h-screen bg-gray-50 flex flex-col items-center justify-start space-y-16">
    
    <!-- Hero Section -->
    <section class="relative w-full h-screen bg-gray-50 flex flex-col md:flex-row items-center justify-center overflow-hidden px-6 md:px-16">

        <!-- Floating Shapes -->
        <div class="absolute top-10 left-10 w-12 h-12 md:w-20 md:h-20 bg-yellow-400 rounded-full animate-pulse opacity-50"></div>
        <div class="absolute top-32 right-10 md:right-20 w-12 h-12 md:w-16 md:h-16 bg-red-500 rounded-full animate-pulse opacity-50"></div>
        <div class="absolute bottom-20 left-1/4 md:left-1/3 w-12 h-12 md:w-16 md:h-16 bg-red-500 rounded-full animate-pulse opacity-50"></div>

        <!-- Hero Text -->
        <div class="z-20 max-w-xl text-left md:mr-16 mb-10 md:mb-0 animate-fade-in-left">
            <p class="text-red-500 font-medium text-xs sm:text-sm md:text-base uppercase mb-2 opacity-0 animate-fade-in-delay">
                Online Food Delivery
            </p>

            <h1 class="text-3xl sm:text-4xl md:text-6xl font-extrabold text-gray-900 leading-tight mb-4">
                <span class="typing-text text-red-500">Don’t Starve </span><span class="text-gray-900">Just Order</span>
            </h1>

            <p class="text-gray-500 mt-4 sm:mt-6 text-xs sm:text-sm md:text-base opacity-0 animate-fade-in-delay-2">
                Experience the best of convenience and quality with 5-Minutes — your one-stop destination for fresh products, daily deals, and unbeatable offers delivered right to your doorstep.
            </p>

            <!-- Buttons -->
            <div class="mt-6 flex flex-wrap gap-4 opacity-0 animate-fade-in-delay-3">
                <a href="#" class="px-4 sm:px-6 py-2 sm:py-3 bg-red-500 text-white font-semibold rounded-lg shadow hover:bg-red-600 transition text-sm sm:text-base">
                    Order Now
                </a>

                <a href="#more" class="relative px-4 sm:px-6 py-2 sm:py-3 text-red-500 font-semibold rounded-lg text-sm sm:text-base border-2 border-transparent bg-white hover:bg-red-50 transition overflow-hidden">
                    Know more
                    <span class="absolute inset-0 rounded-lg border-2 border-transparent animate-rgb-border pointer-events-none"></span>
                </a>
            </div>
        </div>

        <!-- Image Slider -->
        <div id="image-slider" class="w-full sm:w-3/4 md:w-full max-w-lg h-64 sm:h-80 md:h-[500px] rounded-lg flex items-center justify-center overflow-hidden relative">
            <img id="slider-image" src="images/Snack-PNG.png" alt="Food Image"
                 class="object-contain w-full h-full p-2 sm:p-4 transition-transform duration-700 ease-in-out" />
        </div>

        <!-- Floating Social Icons -->
        <div class="fixed top-1/2 right-0 transform -translate-y-1/2 z-50">
            <div class="flex flex-col gap-4 bg-red-500 rounded-l-2xl px-3 py-6 max-sm:hidden">
                <a href="#" class="text-white text-xl hover:text-gray-200 transition"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white text-xl hover:text-gray-200 transition"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white text-xl hover:text-gray-200 transition"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white text-xl hover:text-gray-200 transition"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="hidden max-sm:flex items-center justify-center w-14 h-14 rounded-full bg-red-500 shadow-lg">
                <i class="fas fa-share-alt text-white text-2xl"></i>
            </div>
        </div>
    </section>

    {{-- Banner Section --}}
    <section id="banner" class="w-full py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-6 md:px-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 text-center mb-8">
                Latest Offers & Promotions
            </h2>
            <div class="relative w-full overflow-hidden rounded-2xl shadow-lg">
                <div id="banner-slider" class="flex transition-transform duration-700 ease-in-out">
                    <div class="min-w-full"><img src="images/banner1.png" alt="Banner 1" class="w-full h-64 md:h-96 object-cover rounded-2xl"></div>
                    <div class="min-w-full"><img src="images/banner2.png" alt="Banner 2" class="w-full h-64 md:h-96 object-cover rounded-2xl"></div>
                    <div class="min-w-full"><img src="images/banner3.png" alt="Banner 3" class="w-full h-64 md:h-96 object-cover rounded-2xl"></div>
                </div>
                <button id="prevBanner" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow hover:bg-gray-100 transition">
                    <i class="fas fa-chevron-left text-gray-800"></i>
                </button>
                <button id="nextBanner" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow hover:bg-gray-100 transition">
                    <i class="fas fa-chevron-right text-gray-800"></i>
                </button>
            </div>
        </div>
    </section>

    {{-- Stay Connected Section --}}
    <section id="stay-connected" class="w-full py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 md:px-16 text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-6 scroll-up">Stay Connected</h2>
            <p class="text-gray-500 mb-12 scroll-down">Follow us on social media to get the latest updates, offers, and news.</p>
            <div class="flex justify-center flex-wrap gap-6 scroll-up">
                <a href="#" class="text-blue-400 text-3xl hover:text-blue-500 transition transform hover:scale-110"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-pink-500 text-3xl hover:text-pink-600 transition transform hover:scale-110"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-blue-600 text-3xl hover:text-blue-700 transition transform hover:scale-110"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-red-600 text-3xl hover:text-red-700 transition transform hover:scale-110"><i class="fab fa-youtube"></i></a>
                <a href="#" class="text-blue-700 text-3xl hover:text-blue-800 transition transform hover:scale-110"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="text-black text-3xl hover:text-gray-800 transition transform hover:scale-110"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>
    </section>
</div>

<!-- Scripts -->
<script>
    // Hero slider images
    const images = ["images/Snack-PNG.png","images/Snack-PNG-Transparent.png","images/Snack-PNG-Free-Download.png"];
    let current = 0;
    const sliderImage = document.getElementById('slider-image');
    function slideImages(){current=(current+1)%images.length;sliderImage.src=images[current];}
    setInterval(slideImages,3000);

    // Banner slider
    const slider = document.getElementById('banner-slider');
    const slides = slider.children;
    const total = slides.length;
    let currentBanner = 0;
    function showSlide(index){slider.style.transform=`translateX(-${index*100}%)`;}
    document.getElementById('prevBanner').addEventListener('click',()=>{currentBanner=(currentBanner-1+total)%total;showSlide(currentBanner);});
    document.getElementById('nextBanner').addEventListener('click',()=>{currentBanner=(currentBanner+1)%total;showSlide(currentBanner);});
    setInterval(()=>{currentBanner=(currentBanner+1)%total;showSlide(currentBanner);},5000);

    // Scroll animations
    const elements = document.querySelectorAll('.scroll-up, .scroll-down');
    const observer = new IntersectionObserver(entries=>{entries.forEach(entry=>{if(entry.isIntersecting){entry.target.classList.add('in-view');}});},{threshold:0.2});
    elements.forEach(el=>observer.observe(el));
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danix Solutions</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
          integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous">

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-pbJ6Wg8F+CM4AdfVZrV9nK4e6f+vl0P1hWYqYVGci3kvoZrg3K/FtK4Rer9mjMNsm2jgpFEn7lq29UbXyGDpQw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- GLightbox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

    <!-- Favicons & Meta -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <meta name="description" content="Danix Solutions - Empowering brands through innovative digital solutions.">
    <meta name="keywords" content="web development, mobile app development, digital marketing, Danix Solutions, Ghana, software development, IT solutions">
    <meta name="author" content="Danix Solutions">
    <meta property="og:title" content="Danix Solutions - Innovative Digital Solutions">
    <meta property="og:description" content="Empowering brands through innovative digital solutions.">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Danix Solutions - Innovative Digital Solutions">
    <meta name="twitter:description" content="Empowering brands through innovative digital solutions.">
    <meta name="twitter:image" content="{{ asset('images/logo.png') }}">

    <!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">

</head>


<!-- Cookie Consent -->
{{-- <div id="cookieBanner" class="fixed bottom-0 inset-x-0 bg-gray-800 text-white text-sm py-4 px-6 z-50 flex justify-between items-center hidden">
    <span>We use cookies to improve your experience. By continuing, you accept our use of cookies.</span>
    <button onclick="acceptCookies()" class="ml-4 bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded text-white text-sm">
        Accept
    </button>
</div>

<script>
    function acceptCookies() {
        document.getElementById('cookieBanner').classList.add('hidden');
        localStorage.setItem('cookiesAccepted', 'true');
    }

    if (!localStorage.getItem('cookiesAccepted')) {
        setTimeout(() => {
            document.getElementById('cookieBanner').classList.remove('hidden');
        }, 2000);
    }
</script> --}}

<body class="bg-white text-gray-800">

    {{-- Navigation --}}
    @include('partials.nav')

    {{-- Flash Messages --}}
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-6 max-w-2xl mx-auto text-center">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-6 max-w-2xl mx-auto text-center">
            {{ session('error') }}
        </div>
    @endif

    {{-- Main Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('partials.footer')

    {{-- AOS Animation Init --}}
    <script>
        AOS.init();
    </script>

    <!-- Scroll to Top Button (ensure z-index and positioning are intact) -->
<button id="scrollToTop"
        class="fixed bottom-6 right-6 z-50 bg-blue-600 text-white p-3 rounded-full shadow-lg hidden hover:bg-blue-700 transition">
  <i class="fas fa-chevron-up"></i>
</button>


    <script>
        const scrollBtn = document.getElementById('scrollToTop');
        window.addEventListener('scroll', () => {
            scrollBtn.classList.toggle('hidden', window.scrollY <= 300);
        });
        scrollBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>

    <!-- WhatsApp Chat Button -->
<a href="https://wa.me/233501027131" target="_blank"
   class="fixed bottom-20 right-6 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition">
  <i class="fab fa-whatsapp fa-lg"></i>
</a>


    {{-- GLightbox --}}
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        const lightbox = GLightbox({ selector: '.glightbox' });
    </script>

    {{-- Mobile Menu Toggle --}}
    <script>
        const toggleBtn = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');

        toggleBtn?.addEventListener('click', () => {
            mobileMenu?.classList.toggle('hidden');
        });

        document.querySelectorAll('#mobileMenu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu?.classList.add('hidden');
            });
        });
    </script>

    {{-- Swiper Carousel --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            new Swiper('.swiper', {
                loop: true,
                autoplay: { delay: 5000 },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: { slidesPerView: 1 },
                    768: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 }
                },
                spaceBetween: 30
            });
        });
    </script>

    {{-- Active Link on Scroll --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const sections = document.querySelectorAll("section[id]");
            const navLinks = document.querySelectorAll("nav a[href^='#']");

            function activateLink() {
                let scrollY = window.pageYOffset;
                sections.forEach(current => {
                    const sectionTop = current.offsetTop - 100;
                    const sectionHeight = current.offsetHeight;
                    const sectionId = current.getAttribute("id");

                    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                        navLinks.forEach(link => {
                            link.classList.remove("text-blue-600", "font-semibold");
                            if (link.getAttribute("href").includes(sectionId)) {
                                link.classList.add("text-blue-600", "font-semibold");
                            }
                        });
                    }
                });
            }

            window.addEventListener("scroll", activateLink);
        });
    </script>

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


</body>

</html>

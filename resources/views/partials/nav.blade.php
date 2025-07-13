<nav class="bg-white shadow fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">

        {{-- Logo --}}
        <a href="{{ url('/') }}" class="text-2xl font-bold text-gray-900">
            <img src="{{ asset('images/logo.png') }}" alt="Danix Logo" class="h-10">
        </a>

        {{-- Desktop Menu --}}
        <div class="hidden md:flex space-x-8 text-sm font-medium">
            <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 transition">Home</a>
            <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 transition">About</a>
            <a href="{{ route('services') }}" class="text-gray-700 hover:text-blue-600 transition">Services</a>
            <a href="{{ route('portfolio') }}" class="text-gray-700 hover:text-blue-600 transition">Portfolio</a>
            <a href="{{ route('team') }}" class="text-gray-700 hover:text-blue-600 transition">Team</a>
            <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600 transition">Contact</a>
        </div>

        {{-- Contact Button --}}
        <div class="hidden md:block">
            <a href="#contact" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Let’s Talk
            </a>
        </div>

        {{-- Hamburger Button --}}
        <button id="menuToggle" class="md:hidden text-gray-800 focus:outline-none">
            <i class="fas fa-bars text-2xl"></i>
        </button>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobileMenu" class="hidden md:hidden absolute top-16 left-0 w-full bg-white shadow-md z-40">
        <div class="p-4 space-y-4 text-center">
            <a href="{{ route('home') }}" class="block text-gray-800 hover:text-blue-600">Home</a>
            <a href="{{ route('about') }}" class="block text-gray-800 hover:text-blue-600">About</a>
            <a href="{{ route('services') }}" class="block text-gray-800 hover:text-blue-600">Services</a>
            <a href="{{ route('portfolio') }}" class="block text-gray-800 hover:text-blue-600">Our Work</a>
            <a href="{{ route('team') }}" class="block text-gray-800 hover:text-blue-600">Team</a>
            <a href="{{ route('contact') }}" class="block text-gray-800 hover:text-blue-600">Contact</a>
        </div>
    </div>
</nav>

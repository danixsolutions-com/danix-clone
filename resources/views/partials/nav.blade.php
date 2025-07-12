<nav class="bg-white shadow fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="text-2xl font-bold text-gray-900">
            <img src="{{ asset('images/logo.png') }}" alt="Danix Logo" class="h-10">
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-8 text-sm font-medium">
            <a href="#about" class="text-gray-700 hover:text-blue-600 transition">About</a>
            <a href="#services" class="text-gray-700 hover:text-blue-600 transition">Services</a>
            <a href="#work" class="text-gray-700 hover:text-blue-600 transition">Our Work</a>
            <a href="#team" class="text-gray-700 hover:text-blue-600 transition">Team</a>
            <a href="#contact" class="text-gray-700 hover:text-blue-600 transition">Contact</a>
        </div>

        <!-- Contact Button -->
        <div class="hidden md:block">
            <a href="#contact" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Let’s Talk
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="menu-btn" class="text-gray-700 focus:outline-none">
                ☰
            </button>
        </div>
    </div>
</nav>

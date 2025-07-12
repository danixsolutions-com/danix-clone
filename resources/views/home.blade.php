@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-[url('/images/hero-bg.jpg')] bg-cover bg-center min-h-screen text-white flex items-center justify-center">
    <div class="absolute inset-0 bg-black bg-opacity-80"></div>

    <div class="relative z-10 text-center px-4">
        <!-- Headline -->
        <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-6" data-aos="fade-up">
            Welcome to Danix Solutions
        </h1>

        <!-- Subtext -->
        <p class="text-lg sm:text-xl mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            We help brands stand out in the digital era. Together we can do great things.
        </p>

        <!-- CTA Button -->
        <a href="#contact" class="bg-blue-600 hover:bg-blue-700 transition px-6 py-3 rounded-lg text-white font-medium inline-block" data-aos="fade-up" data-aos-delay="400">
            Let’s Talk
        </a>

        <!-- Social Icons -->
        <div class="flex justify-center space-x-6 mt-10" data-aos="fade-up" data-aos-delay="600">
            <a href="https://www.linkedin.com/company/danixsolutions/" target="_blank" class="text-white hover:text-blue-400 transition">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M20.452 20.452h-3.555v-5.569c0-1.328-.024-3.041-1.853-3.041-1.853 0-2.136 1.447-2.136 2.941v5.669H9.353V9h3.414v1.561h.048c.476-.898 1.637-1.848 3.368-1.848 3.6 0 4.266 2.369 4.266 5.452v6.287zM5.337 7.433c-1.144 0-2.069-.927-2.069-2.069 0-1.144.926-2.069 2.069-2.069s2.069.926 2.069 2.069c0 1.142-.925 2.069-2.069 2.069zm1.777 13.019H3.56V9h3.554v11.452zM22.225 0H1.771C.792 0 0 .771 0 1.723v20.553C0 23.228.792 24 1.771 24h20.451C23.2 24 24 23.228 24 22.276V1.723C24 .771 23.2 0 22.225 0z"/></svg>
            </a>
            <a href="https://wa.me/233501027131" target="_blank" class="text-white hover:text-green-400 transition">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 32 32"><path d="M16 .396C7.164.396.396 7.164.396 16c0 2.822.736 5.574 2.133 7.998L.4 31.604l7.771-2.108A15.489 15.489 0 0 0 16 31.604c8.837 0 15.604-6.768 15.604-15.604C31.604 7.164 24.837.396 16 .396zm0 28.79c-2.563 0-5.065-.678-7.259-1.958l-.518-.308-4.613 1.253 1.233-4.492-.338-.553a13.262 13.262 0 0 1-2.026-7.031c0-7.312 5.946-13.259 13.259-13.259 7.313 0 13.259 5.947 13.259 13.259.001 7.313-5.946 13.259-13.259 13.259zm7.158-9.8c-.392-.196-2.314-1.14-2.672-1.268-.358-.13-.618-.196-.878.196-.259.392-1.01 1.267-1.24 1.527-.23.26-.459.294-.851.098-.392-.196-1.656-.61-3.153-1.946-1.165-1.039-1.949-2.321-2.178-2.713-.23-.392-.025-.604.171-.8.175-.175.392-.458.588-.688.196-.23.261-.392.392-.653.13-.261.065-.49-.033-.688-.098-.196-.878-2.12-1.203-2.896-.317-.763-.64-.66-.878-.67-.23-.01-.49-.012-.75-.012s-.688.098-1.047.49c-.359.392-1.374 1.343-1.374 3.276 0 1.934 1.406 3.801 1.602 4.063.196.261 2.767 4.22 6.712 5.914.938.403 1.67.642 2.24.82.941.3 1.798.258 2.475.157.755-.113 2.314-.946 2.642-1.86.326-.914.326-1.699.23-1.86-.098-.163-.358-.259-.75-.457z"/></svg>
            </a>
            <a href="https://www.instagram.com/danixsolutions/" target="_blank" class="text-white hover:text-pink-400 transition">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.206.056 2.003.24 2.466.403a4.92 4.92 0 0 1 1.675 1.088 4.92 4.92 0 0 1 1.088 1.675c.163.463.347 1.26.403 2.466.058 1.266.07 1.645.07 4.85s-.012 3.584-.07 4.85c-.056 1.206-.24 2.003-.403 2.466a4.92 4.92 0 0 1-1.088 1.675 4.92 4.92 0 0 1-1.675 1.088c-.463.163-1.26.347-2.466.403-1.266.058-1.645.07-4.85.07s-3.584-.012-4.85-.07c-1.206-.056-2.003-.24-2.466-.403a4.92 4.92 0 0 1-1.675-1.088 4.92 4.92 0 0 1-1.088-1.675c-.163-.463-.347-1.26-.403-2.466C2.175 15.747 2.163 15.368 2.163 12s.012-3.584.07-4.85c.056-1.206.24-2.003.403-2.466a4.92 4.92 0 0 1 1.088-1.675A4.92 4.92 0 0 1 5.4 2.636c.463-.163 1.26-.347 2.466-.403C8.416 2.175 8.796 2.163 12 2.163zm0 1.837c-3.17 0-3.548.012-4.8.07-1.04.05-1.602.219-1.975.366-.497.194-.853.428-1.228.803a3.916 3.916 0 0 0-.803 1.228c-.147.373-.316.935-.366 1.975-.058 1.252-.07 1.63-.07 4.8s.012 3.548.07 4.8c.05 1.04.219 1.602.366 1.975.194.497.428.853.803 1.228.375.375.731.609 1.228.803.373.147.935.316 1.975.366 1.252.058 1.63.07 4.8.07s3.548-.012 4.8-.07c1.04-.05 1.602-.219 1.975-.366.497-.194.853-.428 1.228-.803.375-.375.609-.731.803-1.228.147-.373.316-.935.366-1.975.058-1.252.07-1.63.07-4.8s-.012-3.548-.07-4.8c-.05-1.04-.219-1.602-.366-1.975a3.91 3.91 0 0 0-.803-1.228 3.91 3.91 0 0 0-1.228-.803c-.373-.147-.935-.316-1.975-.366-1.252-.058-1.63-.07-4.8-.07zm0 4.838a5.999 5.999 0 1 0 0 12 5.999 5.999 0 0 0 0-12zm0 9.838a3.839 3.839 0 1 1 0-7.678 3.839 3.839 0 0 1 0 7.678zm6.406-10.844a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0z"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section id="about" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <!-- Heading -->
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-2">About Us</h2>
            <p class="text-gray-600 max-w-xl mx-auto">
                We are a Creative Digital Agency based in Accra Ghana.
            </p>
        </div>

        <!-- Content -->
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Left Text -->
            <div class="text-gray-700 space-y-6" data-aos="fade-right">
                <p>
                    Danix Solutions is a results-driven digital agency committed to helping companies thrive in a digital-first world.
                    We believe in human-centered, accessible, and strategic design to solve problems and deliver impactful experiences.
                </p>
                <p>
                    Our team is a blend of passionate creatives, developers, and problem-solvers who collaborate to craft exceptional solutions
                    that deliver results and drive innovation. We serve startups, SMEs, and larger brands seeking real digital impact.
                </p>
            </div>

            <!-- Right Image -->
            <div data-aos="fade-left">
                <img src="{{ asset('images/about.jpg') }}" alt="About Danix Solutions" class="rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-20 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <!-- Heading -->
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-2">Our Services</h2>
            <p class="text-gray-600 max-w-xl mx-auto">
                We craft custom-tailored digital solutions for modern businesses.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Service Card -->
            @foreach ([
                ['title' => 'Web Design & Development', 'icon' => '💻', 'desc' => 'We create fast, modern, mobile-first websites that make an impact.'],
                ['title' => 'UI/UX Design', 'icon' => '🎨', 'desc' => 'Human-centered design focused on clarity, usability, and brand alignment.'],
                ['title' => 'Graphic Design', 'icon' => '🖼️', 'desc' => 'Designs that visually communicate your message and mission.'],
                ['title' => 'Digital Marketing', 'icon' => '📈', 'desc' => 'Targeted online campaigns to grow your brand and reach new customers.'],
                ['title' => 'Brand Strategy', 'icon' => '🚀', 'desc' => 'We help define and position your brand with clarity and confidence.'],
                ['title' => 'Social Media Management', 'icon' => '📱', 'desc' => 'End-to-end management of your digital presence across platforms.']
            ] as $index => $service)
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="text-4xl mb-4">{{ $service['icon'] }}</div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $service['title'] }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">{{ $service['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Our Work Section -->
<section id="work" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <!-- Heading -->
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-2">Our Work</h2>
            <p class="text-gray-600 max-w-xl mx-auto">
                Explore some of our recent projects.
            </p>
        </div>

        <!-- Portfolio Grid -->
        <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3">
            @foreach ([
                ['image' => 'portfolio1.jpg', 'link' => '#'],
                ['image' => 'portfolio2.jpg', 'link' => '#'],
                ['image' => 'portfolio3.jpg', 'link' => '#'],
                ['image' => 'portfolio4.jpg', 'link' => '#'],
                ['image' => 'portfolio5.jpg', 'link' => '#'],
                ['image' => 'portfolio6.jpg', 'link' => '#'],
            ] as $index => $project)
                <a href="{{ $project['link'] }}" target="_blank" class="block overflow-hidden rounded-lg shadow-lg transform hover:scale-105 transition duration-300" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                    <img src="{{ asset('images/portfolio/' . $project['image']) }}" alt="Project {{ $index + 1 }}" class="w-full h-64 object-cover">
                </a>
            @endforeach
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-20 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <!-- Heading -->
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-2">Testimonials</h2>
            <p class="text-gray-600 max-w-xl mx-auto">
                Hear what our happy clients have to say about working with us.
            </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ([
                ['avatar' => 'client1.jpg', 'name' => 'Richard Appiah', 'role' => 'CEO, Appsy Ltd.', 'quote' => 'Working with Danix Solutions was one of the best business decisions we made. Our website looks and performs incredibly.'],
                ['avatar' => 'client2.jpg', 'name' => 'Sarah Boateng', 'role' => 'Marketing Lead, Ghana Events', 'quote' => 'They brought our vision to life! The team was professional, timely, and extremely creative.'],
                ['avatar' => 'client3.jpg', 'name' => 'Michael Osei', 'role' => 'Founder, LearnXpress', 'quote' => 'We saw instant results in our engagement after launching with Danix. They understand the digital space better than most.'],
            ] as $index => $testimonial)
                <div class="bg-white rounded-lg p-6 shadow hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/testimonials/' . $testimonial['avatar']) }}" alt="{{ $testimonial['name'] }}" class="w-14 h-14 rounded-full mr-4 object-cover">
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800">{{ $testimonial['name'] }}</h4>
                            <span class="text-sm text-gray-500">{{ $testimonial['role'] }}</span>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm italic">"{{ $testimonial['quote'] }}"</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <!-- Heading -->
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-2">Meet Our Team</h2>
            <p class="text-gray-600 max-w-xl mx-auto">
                A dedicated team of creatives, developers, and problem-solvers.
            </p>
        </div>

        <!-- Team Grid -->
        <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-3">
            @foreach ([
                ['image' => 'team1.jpg', 'name' => 'Daniel Adongo', 'role' => 'Founder & Lead Developer', 'linkedin' => 'https://www.linkedin.com/in/danieladongo/'],
                ['image' => 'team2.jpg', 'name' => 'Esi Kafui', 'role' => 'UI/UX Designer', 'linkedin' => '#'],
                ['image' => 'team3.jpg', 'name' => 'Kwame Boateng', 'role' => 'Marketing Strategist', 'linkedin' => '#'],
            ] as $index => $member)
                <div class="group bg-gray-100 p-6 rounded-lg shadow hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="relative">
                        <img src="{{ asset('images/team/' . $member['image']) }}" alt="{{ $member['name'] }}" class="rounded-lg object-cover h-64 w-full mb-4">
                        <a href="{{ $member['linkedin'] }}" target="_blank" class="absolute bottom-4 right-4 bg-blue-600 text-white p-2 rounded-full opacity-0 group-hover:opacity-100 transition">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.568c0-1.327-.025-3.041-1.852-3.041-1.853 0-2.136 1.446-2.136 2.941v5.669H9.354V9h3.414v1.561h.049c.476-.898 1.636-1.848 3.367-1.848 3.6 0 4.266 2.368 4.266 5.451v6.288zM5.337 7.433c-1.144 0-2.069-.927-2.069-2.07 0-1.142.925-2.069 2.069-2.069s2.069.927 2.069 2.069c0 1.143-.925 2.07-2.069 2.07zM6.777 20.452H3.896V9h2.881v11.452z"/></svg>
                        </a>
                    </div>
                    <div class="text-center">
                        <h4 class="text-lg font-semibold text-gray-800">{{ $member['name'] }}</h4>
                        <p class="text-sm text-gray-500">{{ $member['role'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <!-- Heading -->
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-2">Let’s Talk</h2>
            <p class="text-gray-600 max-w-xl mx-auto">
                Need help with your next project? Reach out and let’s make something amazing together.
            </p>
        </div>

        <!-- Content Grid -->
        <div class="grid md:grid-cols-2 gap-10">
            <!-- Contact Info -->
            <div class="space-y-6 text-gray-700" data-aos="fade-right">
                <div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-1">Email</h4>
                    <p><a href="mailto:info@danixsolutions.com" class="text-blue-600 hover:underline">info@danixsolutions.com</a></p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-1">Phone</h4>
                    <p><a href="tel:+233501027131" class="text-blue-600 hover:underline">+233 50 102 7131</a></p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-1">Location</h4>
                    <p>Accra, Ghana</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div data-aos="fade-left">
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <input type="text" name="name" placeholder="Your Name" required
                            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Your Email" required
                            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <input type="text" name="subject" placeholder="Subject" required
                            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <textarea name="message" rows="5" placeholder="Your Message" required
                            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <div>
                        <button type="submit"
                            class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection

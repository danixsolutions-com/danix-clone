@extends('layouts.app')

@section('content')

<!-- Portfolio Hero Section -->
<section class="bg-gray-900 text-white py-24">
    <div class="max-w-4xl mx-auto text-center px-4" data-aos="fade-up">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Work</h1>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">
            We’ve partnered with visionary brands to bring ideas to life.
        </p>
    </div>
</section>

<!-- Portfolio Grid Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-3">
            @foreach ([
                ['image' => 'project1.jpg', 'link' => '#'],
                ['image' => 'project2.jpg', 'link' => '#'],
                ['image' => 'project3.jpg', 'link' => '#'],
                ['image' => 'project4.jpg', 'link' => '#'],
                ['image' => 'project5.jpg', 'link' => '#'],
                ['image' => 'project6.jpg', 'link' => '#'],
            ] as $index => $project)
                <a
                    href="{{ $project['link'] }}"
                    target="_blank"
                    class="block group overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition transform hover:scale-105"
                    data-aos="zoom-in"
                    data-aos-delay="{{ $index * 100 }}"
                >
                    <img
                        src="{{ asset('images/portfolio/' . $project['image']) }}"
                        alt="Project {{ $index + 1 }}"
                        class="w-full h-64 object-cover"
                    >
                </a>
            @endforeach
        </div>
    </div>
</section>

<!-- Call-to-Action Section -->
<section class="py-20 bg-blue-600 text-white text-center" data-aos="zoom-in">
    <h2 class="text-3xl font-bold mb-4">Like what you see?</h2>
    <p class="text-lg mb-6">Let’s build something amazing together.</p>
    <a
        href="{{ route('contact') }}"
        class="bg-white text-blue-600 px-6 py-3 rounded font-semibold hover:bg-gray-100 transition"
    >
        Start a Project
    </a>
</section>

@endsection

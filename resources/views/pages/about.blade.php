@extends('layouts.app')

@section('content')

<!-- About Page Hero -->
<section class="bg-gray-900 text-white py-24">
    <div class="max-w-4xl mx-auto text-center px-4" data-aos="fade-up">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">About Danix Solutions</h1>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">
            We build powerful digital experiences that elevate your brand.
        </p>
    </div>
</section>

<!-- Who We Are -->
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 md:px-6 grid md:grid-cols-2 gap-12 items-center">
        <div data-aos="fade-right">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Who We Are</h2>
            <p class="text-gray-600 leading-relaxed">
                Danix Solutions is a forward-thinking digital agency based in Accra, Ghana. Our passion lies in creating
                clean, user-friendly, and effective solutions for brands ready to grow in the digital world.
            </p>
            <p class="text-gray-600 mt-4 leading-relaxed">
                We work with startups, businesses, and organizations to help them gain an edge in a digital-first economy,
                leveraging design, technology, and strategy to deliver outstanding outcomes.
            </p>
        </div>
        <div data-aos="fade-left">
            <img src="{{ asset('images/about-team.jpg') }}" alt="Danix Team" class="rounded-lg shadow-lg">
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-20 bg-gray-100">
    <div class="max-w-6xl mx-auto px-4 md:px-6 grid md:grid-cols-2 gap-10">
        <div data-aos="fade-up">
            <h3 class="text-2xl font-semibold text-gray-800 mb-2">Our Mission</h3>
            <p class="text-gray-600 leading-relaxed">
                To empower brands with innovative digital solutions that deliver measurable impact.
            </p>
        </div>
        <div data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-2xl font-semibold text-gray-800 mb-2">Our Vision</h3>
            <p class="text-gray-600 leading-relaxed">
                To be Africa’s leading digital transformation partner for startups and enterprises.
            </p>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="py-20 bg-white">
    <div class="max-w-5xl mx-auto px-4 md:px-6 text-center">
        <h3 class="text-3xl font-bold text-gray-800 mb-10" data-aos="fade-up">Our Core Values</h3>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ([
                ['title' => 'Innovation', 'desc' => 'We explore and implement cutting-edge ideas.'],
                ['title' => 'Integrity', 'desc' => 'We act with honesty, transparency, and ethics.'],
                ['title' => 'Collaboration', 'desc' => 'We believe in teamwork and shared success.'],
                ['title' => 'Excellence', 'desc' => 'We strive to exceed expectations in all we do.'],
                ['title' => 'Empathy', 'desc' => 'We design with people and their needs in mind.'],
                ['title' => 'Agility', 'desc' => 'We adapt quickly to change with creative solutions.'],
            ] as $value)
                <div data-aos="fade-up" class="bg-gray-100 rounded-lg p-6 shadow-sm hover:shadow-md transition">
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">{{ $value['title'] }}</h4>
                    <p class="text-gray-600 text-sm">{{ $value['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-blue-600 text-white text-center" data-aos="zoom-in">
    <h2 class="text-3xl font-bold mb-4">Let’s build something great together.</h2>
    <p class="text-lg mb-6">We’re ready to take your brand to the next level.</p>
    <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-6 py-3 rounded font-semibold hover:bg-gray-100 transition">
        Contact Us
    </a>
</section>

@endsection

@extends('layouts.app')

@section('content')

<!-- Services Hero Section -->
<section class="bg-gray-900 text-white py-24">
    <div class="max-w-4xl mx-auto text-center px-4" data-aos="fade-up">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Services</h1>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">
            Digital solutions tailored to move your brand forward.
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($services as $index => $service)
                <div class="bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="text-4xl mb-4">{{ $service->icon }}</div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $service->title }}</h3>
                    <p class="text-gray-600 text-sm">{{ $service->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection

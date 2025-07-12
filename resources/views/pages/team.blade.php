@extends('layouts.app')

@section('content')

<!-- Team Hero Section -->
<section class="bg-gray-900 text-white py-24">
    <div class="max-w-4xl mx-auto text-center px-4" data-aos="fade-up">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Team</h1>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">
            A passionate group of creatives, developers, and digital strategists.
        </p>
    </div>
</section>

<!-- Team Members Grid -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-10">
            @foreach ($teamMembers as $index => $member)
    <div class="bg-gray-100 rounded-lg p-6 shadow hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
        <img src="{{ asset('storage/team/' . $member->image) : asset('images/team/' . $member->image) }}" alt="{{ $member->name }}" class="w-full h-64 object-cover rounded-md mb-4">
        <h3 class="text-xl font-semibold text-gray-800">{{ $member->name }}</h3>
        <p class="text-sm text-blue-600 mb-2">{{ $member->role }}</p>
        <p class="text-gray-600 text-sm mb-4">{{ $member->bio }}</p>
        <div class="flex space-x-4">
            @if ($member->linkedin)
            <a href="{{ $member->linkedin }}" target="_blank" class="text-blue-700 hover:text-blue-900">
                <i class="fab fa-linkedin fa-lg"></i>
            </a>
            @endif
            @if ($member->whatsapp)
            <a href="{{ $member->whatsapp }}" target="_blank" class="text-green-600 hover:text-green-800">
                <i class="fab fa-whatsapp fa-lg"></i>
            </a>
            @endif
            @if ($member->instagram)
            <a href="{{ $member->instagram }}" target="_blank" class="text-pink-500 hover:text-pink-700">
                <i class="fab fa-instagram fa-lg"></i>
            </a>
            @endif
        </div>
    </div>
@endforeach

        </div>
    </div>
</section>

@endsection

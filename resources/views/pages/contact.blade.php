@extends('layouts.app')

@section('content')

<!-- Contact Hero -->
<section class="bg-gray-900 text-white py-24">
    <div class="max-w-4xl mx-auto text-center px-4" data-aos="fade-up">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Get In Touch</h1>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">
            Whether you have a question, idea or project in mind — we’re here to help.
        </p>
    </div>
</section>

<!-- Flash Message -->
@if (session('success'))
    <div class="max-w-3xl mx-auto mt-6 px-4">
        <div class="bg-green-100 text-green-800 px-6 py-3 rounded text-center">
            {{ session('success') }}
        </div>
    </div>
@endif

<!-- Contact Section -->
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 md:px-6 grid md:grid-cols-2 gap-10">

        <!-- Contact Info -->
        <div data-aos="fade-right">
            <h3 class="text-2xl font-semibold text-gray-800 mb-6">Contact Information</h3>
            <p class="text-gray-600 mb-4">
                Reach us by email, phone, or WhatsApp — we’ll respond within 24 hours.
            </p>
            <ul class="space-y-4 text-gray-700 text-sm">
                <li><strong>Email:</strong> <a href="mailto:info@danixsolutions.com" class="text-blue-600 hover:underline">info@danixsolutions.com</a></li>
                <li><strong>Phone:</strong> <a href="tel:+233501027131" class="text-blue-600 hover:underline">+233 50 102 7131</a></li>
                <li><strong>Location:</strong> Accra, Ghana</li>
                <li><strong>Instagram:</strong> <a href="https://instagram.com/danixsolutions" class="text-blue-600 hover:underline">@danixsolutions</a></li>
            </ul>
        </div>

        <!-- Contact Form -->
        <div data-aos="fade-left">
            <form method="POST" action="{{ route('contact.store') }}" class="space-y-4">
                @csrf
                <input type="text" name="name" placeholder="Your Name" required
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                <input type="email" name="email" placeholder="Your Email" required
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                <input type="text" name="subject" placeholder="Subject" required
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                <textarea name="message" rows="5" placeholder="Your Message" required
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>

                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Google Maps Embed -->
<section class="py-10">
    <div class="max-w-7xl mx-auto px-4">
        <h3 class="text-2xl font-semibold mb-4 text-gray-800" data-aos="fade-up">Find Us on the Map</h3>
        <div class="overflow-hidden rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="100">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31707.92601465589!2d-0.19182618384793407!3d5.603716571992998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdc9cf92cdcd9fe7%3A0x8217a7a9fdcae4e!2sAccra!5e0!3m2!1sen!2sgh!4v1720707195125!5m2!1sen!2sgh"
                width="100%" height="400"
                style="border:0;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

@endsection

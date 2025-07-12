<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danix Solutions</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <meta name="description" content="Danix Solutions - Empowering brands through innovative digital solutions. We specialize in web development, mobile app development, and digital marketing.">
    <meta name="keywords" content="web development, mobile app development, digital marketing, Danix Solutions, Ghana, software development, IT solutions">
    <meta name="author" content="Danix Solutions">
    <meta property="og:title" content="Danix Solutions - Innovative Digital Solutions">
    <meta property="og:description" content="Empowering brands through innovative digital solutions. We specialize in web development, mobile app development, and digital marketing.">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Danix Solutions - Innovative Digital Solutions">
    <meta name="twitter:description" content="Empowering brands through innovative digital solutions. We specialize in web development, mobile app development, and digital marketing.">
    <meta name="twitter:image" content="{{ asset('images/logo.png') }}">
    <meta name="twitter:site" content="@DanixSolutions">
    <meta name="twitter:creator" content="@DanixSolutions">
    <link rel="canonical" href="{{ url('/') }}">
    <link rel="alternate" href="{{ url('/') }}" hreflang="en">
    <link rel="alternate" href="{{ url('/') }}" hreflang="x-default">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('images/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1o8z5Z3b7k5d9f4e5j6a5c5f5e5d5f5e5d5f5e5d5f5e5d5f5e5d5f5e5d5f5e5d5d5f5e5d5f5e5d5f5e5d5f5e5d5f5e5d5f5e5d5f5e5d5f5e5d5f5e5d5f5e            integrity="sha512-1o8z5Z3b7k5d9f4e5j6a5c            integrity="sha512-1o8z5Z3b7k5d9f4e5j6a5c" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-white text-gray-800">
    @include('partials.nav')
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
    @yield('content')
    @include('partials.footer')

    <script>
        AOS.init();
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#071b15">
    <title>@yield('title', 'MADINA | Weighing Solutions for a Smarter World')</title>
    <meta name="description" content="@yield('description', 'Discover weighing and measurement solutions from MADINA.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/gsap@3.14.2/dist/gsap.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/gsap@3.14.2/dist/ScrollTrigger.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>
    @include('partials.header')
    <main id="main">
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>

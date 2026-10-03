<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Technology Company') · {{ config('company.short_name') }}</title>
    <meta name="description" content="@yield('description', 'The Spark of Akkad LLC builds websites, mobile apps, cloud systems and AI automation for growing businesses.')">
    <meta name="theme-color" content="#0B1F4F">
    <meta property="og:title" content="{{ config('company.name') }}">
    <meta property="og:description" content="{{ config('company.tagline') }}">
    <meta property="og:image" content="{{ asset('images/logo.svg') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;700&family=Noto+Sans+Cuneiform&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}?v=1">
</head>
<body>
    <header class="site-header" id="top">
        <div class="container nav">
            <a href="{{ route('home') }}" class="brand" aria-label="{{ config('company.name') }} home">
                @include('partials.logo-mark')
                <span class="brand__text"><small>The Spark of</small><strong>AKKAD</strong></span>
            </a>
            <button class="nav__toggle" type="button" aria-expanded="false" aria-controls="nav-menu" aria-label="Open menu">
                @include('partials.icon', ['name' => 'menu'])
            </button>
            <nav class="nav__menu" id="nav-menu">
                <a href="{{ route('home') }}" @class(['active' => request()->routeIs('home')])>Home</a>
                <a href="{{ route('services') }}" @class(['active' => request()->routeIs('services')])>Services</a>
                <a href="{{ route('about') }}" @class(['active' => request()->routeIs('about')])>About</a>
                <a href="{{ route('contact') }}" @class(['active' => request()->routeIs('contact')])>Contact</a>
                <a href="{{ route('contact') }}" class="btn btn--gold btn--sm">Start a project</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container footer__grid">
            <div>
                <a href="{{ route('home') }}" class="brand brand--light">
                    @include('partials.logo-mark')
                    <span class="brand__text"><small>The Spark of</small><strong>AKKAD</strong></span>
                </a>
                <p class="footer__tag">{{ config('company.tagline') }}</p>
            </div>
            <div>
                <h4>Company</h4>
                <a href="{{ route('about') }}">About us</a>
                <a href="{{ route('services') }}">Services</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
            <div>
                <h4>Services</h4>
                @foreach (array_slice(config('services_list'), 0, 4, true) as $key => $service)
                    <a href="{{ route('services') }}#{{ $key }}">{{ $service['title'] }}</a>
                @endforeach
            </div>
            <div>
                <h4>Get in touch</h4>
                <a href="mailto:{{ config('company.email') }}">{{ config('company.email') }}</a>
                <a href="https://wa.me/{{ config('company.whatsapp') }}" target="_blank" rel="noopener">WhatsApp: {{ config('company.phone') }}</a>
                <span>{{ config('company.location') }}</span>
            </div>
        </div>
        <div class="container footer__bottom">
            <span>&copy; {{ date('Y') }} {{ config('company.name') }}. All rights reserved.</span>
            <a href="#top">Back to top ↑</a>
        </div>
    </footer>

    @include('partials.whatsapp-button')
    <script src="{{ asset('js/site.js') }}?v=1" defer></script>
</body>
</html>

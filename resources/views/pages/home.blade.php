@extends('layouts.app')

@section('title', 'Technology Company')

@section('content')
    <section class="hero">
        <div class="hero__pattern" aria-hidden="true"></div>
        <div class="container hero__grid">
            <div class="hero__copy">
                <span class="eyebrow">Technology company · Est. {{ date('Y') }}</span>
                <h1>Ancient ingenuity.<br><span class="text-gold">Modern technology.</span></h1>
                <p class="lead">
                    The Spark of Akkad builds websites, apps, cloud systems and AI tools that help businesses grow.
                    We're new, focused, and ready to build with you from day one.
                </p>
                <div class="hero__actions">
                    <a href="{{ route('contact') }}" class="btn btn--gold">Start your project @include('partials.icon', ['name' => 'arrow'])</a>
                    <a href="https://wa.me/{{ config('company.whatsapp') }}?text={{ rawurlencode(config('company.whatsapp_message')) }}" target="_blank" rel="noopener" class="btn btn--wa">
                        @include('partials.whatsapp-icon') WhatsApp us
                    </a>
                </div>
            </div>
            <div class="hero__art" aria-hidden="true">
                <div class="hero__glow"></div>
                @include('partials.logo-mark', ['class' => 'hero__mark'])
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section__head">
                <span class="eyebrow eyebrow--dark">What we do</span>
                <h2>Technology services for every stage</h2>
                <p>From a first website to custom software and AI, one team that handles the whole thing.</p>
            </div>
            <div class="cards">
                @foreach (config('services_list') as $key => $service)
                    <a href="{{ route('services') }}#{{ $key }}" class="card">
                        <span class="card__icon">@include('partials.icon', ['name' => $service['icon']])</span>
                        <h3>{{ $service['title'] }}</h3>
                        <p>{{ $service['summary'] }}</p>
                        <span class="card__more">Learn more @include('partials.icon', ['name' => 'arrow'])</span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section section--sand">
        <div class="container story">
            <div class="story__tablet" aria-hidden="true">
                <div class="tablet">
                    <span class="tablet__row">𒀭 𒂗 𒆤</span>
                    <span class="tablet__row tablet__row--code">&lt;/&gt; { } =&gt;</span>
                    <span class="tablet__caption">Clay → Code</span>
                </div>
            </div>
            <div>
                <span class="eyebrow eyebrow--dark">Why “Akkad”?</span>
                <h2>Where information technology began</h2>
                <p>
                    Over four thousand years ago, Akkad built one of the world's first empires. Its scribes pressed
                    wedge-shaped marks into clay. That was cuneiform, one of the earliest ways people stored and shared knowledge.
                </p>
                <p>
                    Our logo puts those same wedges together as the eight-pointed Mesopotamian star, shaped like a
                    <strong>spark</strong>. It sums up what we do: the old habit of building and recording things,
                    applied to today's software.
                </p>
                <a href="{{ route('about') }}" class="link">Read our story @include('partials.icon', ['name' => 'arrow'])</a>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section__head">
                <span class="eyebrow eyebrow--dark">How we work</span>
                <h2>From first idea to launch</h2>
            </div>
            <ol class="steps">
                <li><span>01</span><h3>Discover</h3><p>We listen, understand your goals and define what success looks like.</p></li>
                <li><span>02</span><h3>Design</h3><p>We plan the structure and design so you see exactly what you'll get.</p></li>
                <li><span>03</span><h3>Build</h3><p>We develop in short cycles, sharing progress so you're always in the loop.</p></li>
                <li><span>04</span><h3>Launch &amp; support</h3><p>We go live, monitor and keep improving as your business grows.</p></li>
            </ol>
        </div>
    </section>

    @include('partials.cta')
@endsection

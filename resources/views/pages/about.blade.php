@extends('layouts.app')

@section('title', 'About Us')
@section('description', 'The Spark of Akkad LLC is a new technology company inspired by Akkad, home of one of the first information technologies.')

@section('content')
    <section class="page-hero">
        <div class="hero__pattern" aria-hidden="true"></div>
        <div class="container">
            <span class="eyebrow">About us</span>
            <h1>A new company with very old roots</h1>
            <p class="lead">{{ config('company.name') }} is a technology company built to give businesses reliable, modern software, with care and craftsmanship.</p>
        </div>
    </section>

    <section class="section">
        <div class="container story">
            <div class="story__tablet" aria-hidden="true">
                @include('partials.logo-mark', ['class' => 'about__mark'])
            </div>
            <div>
                <span class="eyebrow eyebrow--dark">Our story</span>
                <h2>The meaning behind the name</h2>
                <p>
                    <strong>Akkad</strong> was the heart of one of history's first empires in ancient Mesopotamia, the land between
                    the Tigris and Euphrates. Its scribes wrote in <strong>cuneiform</strong>, wedge-shaped marks pressed into clay.
                    It was one of the first technologies people used to record and share information.
                </p>
                <p>
                    A <strong>spark</strong> is where every fire starts. We're starting at the beginning too, and we want
                    every project to be that spark for a business.
                </p>
                <h3 class="mt">About our logo</h3>
                <p>
                    The mark is an eight-pointed star, a symbol used across ancient Mesopotamian art. Each point is drawn as a
                    cuneiform wedge, and they meet at a glowing center, like a spark. The deep lapis blue comes from the
                    glazed bricks of Mesopotamia. The gold stands for the energy we bring to new ideas.
                </p>
            </div>
        </div>
    </section>

    <section class="section section--sand">
        <div class="container">
            <div class="section__head">
                <span class="eyebrow eyebrow--dark">Our values</span>
                <h2>What we stand for</h2>
            </div>
            <div class="cards cards--4">
                <div class="card card--plain"><span class="card__icon">@include('partials.icon', ['name' => 'clay'])</span><h3>Craftsmanship</h3><p>Clean code and lasting work, built like it was carved in stone.</p></div>
                <div class="card card--plain"><span class="card__icon">@include('partials.icon', ['name' => 'spark'])</span><h3>Innovation</h3><p>We use modern tools, including AI, wherever they create real value.</p></div>
                <div class="card card--plain"><span class="card__icon">@include('partials.icon', ['name' => 'handshake'])</span><h3>Honesty</h3><p>Clear prices, clear timelines, and no technical jargon without explanation.</p></div>
                <div class="card card--plain"><span class="card__icon">@include('partials.icon', ['name' => 'shield'])</span><h3>Reliability</h3><p>Secure, tested systems with support you can count on.</p></div>
            </div>
        </div>
    </section>

    @include('partials.cta')
@endsection

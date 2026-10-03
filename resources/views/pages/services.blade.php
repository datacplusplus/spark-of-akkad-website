@extends('layouts.app')

@section('title', 'Services')
@section('description', 'Web development, mobile apps, cloud & DevOps, AI automation, cybersecurity and IT consulting by The Spark of Akkad LLC.')

@section('content')
    <section class="page-hero">
        <div class="hero__pattern" aria-hidden="true"></div>
        <div class="container">
            <span class="eyebrow">Services</span>
            <h1>Everything your business needs in technology</h1>
            <p class="lead">One partner for building, launching and protecting your digital products.</p>
        </div>
    </section>

    <section class="section">
        <div class="container service-list">
            @foreach (config('services_list') as $key => $service)
                <article class="service" id="{{ $key }}">
                    <span class="card__icon card__icon--lg">@include('partials.icon', ['name' => $service['icon']])</span>
                    <div>
                        <h2>{{ $service['title'] }}</h2>
                        <p>{{ $service['summary'] }}</p>
                        <ul class="checks">
                            @foreach ($service['points'] as $point)
                                <li>@include('partials.icon', ['name' => 'check']) {{ $point }}</li>
                            @endforeach
                        </ul>
                        <a href="{{ route('contact', ['service' => $key]) }}" class="link">Ask about {{ $service['title'] }} @include('partials.icon', ['name' => 'arrow'])</a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    @include('partials.cta')
@endsection

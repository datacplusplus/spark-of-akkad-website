@extends('layouts.app')

@section('title', 'Contact')
@section('description', 'Contact The Spark of Akkad LLC for a free consultation by form, email or WhatsApp.')

@section('content')
    <section class="page-hero">
        <div class="hero__pattern" aria-hidden="true"></div>
        <div class="container">
            <span class="eyebrow">Contact</span>
            <h1>Let's talk about your project</h1>
            <p class="lead">Send us a message, or chat with us right now on WhatsApp.</p>
        </div>
    </section>

    <section class="section">
        <div class="container contact">
            <aside class="contact__info">
                <a class="wa-card" href="https://wa.me/{{ config('company.whatsapp') }}?text={{ rawurlencode(config('company.whatsapp_message')) }}" target="_blank" rel="noopener">
                    <span class="wa-card__logo">@include('partials.logo-mark')</span>
                    <span>
                        <strong>Chat on WhatsApp</strong>
                        <small>Fastest reply · {{ config('company.phone') }}</small>
                    </span>
                    @include('partials.whatsapp-icon', ['class' => 'wa-card__icon'])
                </a>
                <ul class="contact__list">
                    <li>@include('partials.icon', ['name' => 'mail']) <a href="mailto:{{ config('company.email') }}">{{ config('company.email') }}</a></li>
                    <li>@include('partials.icon', ['name' => 'tel']) <span>{{ config('company.phone') }}</span></li>
                    <li>@include('partials.icon', ['name' => 'pin']) <span>{{ config('company.location') }}</span></li>
                </ul>
            </aside>

            <form class="form" method="POST" action="{{ route('contact.store') }}">
                @csrf
                @if (session('success'))
                    <div class="alert alert--ok" role="status">{{ session('success') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert--err" role="alert">Please check the highlighted fields.</div>
                @endif

                <div class="form__row">
                    <label>Your name *
                        <input type="text" name="name" value="{{ old('name') }}" required maxlength="120" @class(['invalid' => $errors->has('name')])>
                        @error('name')<small class="err">{{ $message }}</small>@enderror
                    </label>
                    <label>Email *
                        <input type="email" name="email" value="{{ old('email') }}" required maxlength="190" @class(['invalid' => $errors->has('email')])>
                        @error('email')<small class="err">{{ $message }}</small>@enderror
                    </label>
                </div>
                <div class="form__row">
                    <label>Phone / WhatsApp
                        <input type="tel" name="phone" value="{{ old('phone') }}" maxlength="40">
                    </label>
                    <label>Service
                        <select name="service">
                            <option value="">Not sure yet</option>
                            @foreach (config('services_list') as $key => $service)
                                <option value="{{ $key }}" @selected(old('service', request('service')) === $key)>{{ $service['title'] }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
                <label>Message *
                    <textarea name="message" rows="6" required minlength="10" maxlength="5000" @class(['invalid' => $errors->has('message')])>{{ old('message') }}</textarea>
                    @error('message')<small class="err">{{ $message }}</small>@enderror
                </label>
                <input type="text" name="website" class="hp" tabindex="-1" autocomplete="off" aria-hidden="true">
                <button type="submit" class="btn btn--gold">Send message @include('partials.icon', ['name' => 'arrow'])</button>
            </form>
        </div>
    </section>
@endsection

<section class="cta">
    <div class="container cta__inner">
        <div>
            <h2>Have an idea? Let's light the spark.</h2>
            <p>Tell us what you need. A free consultation, and a reply within one business day.</p>
        </div>
        <div class="cta__actions">
            <a href="{{ route('contact') }}" class="btn btn--gold">Get a free quote</a>
            <a href="https://wa.me/{{ config('company.whatsapp') }}?text={{ rawurlencode(config('company.whatsapp_message')) }}" target="_blank" rel="noopener" class="btn btn--wa">
                @include('partials.whatsapp-icon') Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

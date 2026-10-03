@php
    $waUrl = 'https://wa.me/'.config('company.whatsapp').'?text='.rawurlencode(config('company.whatsapp_message'));
@endphp
<a class="wa-float" href="{{ $waUrl }}" target="_blank" rel="noopener" aria-label="Chat with Spark of Akkad on WhatsApp">
    <span class="wa-float__bubble">
        <span class="wa-float__brand">@include('partials.logo-mark', ['class' => 'wa-float__logo'])</span>
        <span class="wa-float__text">
            <strong>Spark of Akkad</strong>
            <small><i class="wa-dot"></i> Online · Chat on WhatsApp</small>
        </span>
    </span>
    <span class="wa-float__btn">
        @include('partials.whatsapp-icon')
        <span class="wa-float__badge">@include('partials.logo-mark', ['class' => 'wa-float__badge-logo'])</span>
    </span>
</a>

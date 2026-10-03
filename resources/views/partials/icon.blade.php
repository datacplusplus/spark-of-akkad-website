@php
    $paths = [
        'code' => '<path d="M8 6 2 12l6 6M16 6l6 6-6 6M14 4l-4 16"/>',
        'phone' => '<rect x="6" y="2" width="12" height="20" rx="2.5"/><path d="M11 18h2"/>',
        'cloud' => '<path d="M7 18h10.5a4.5 4.5 0 0 0 .6-8.96A6 6 0 0 0 6.4 10.1 4 4 0 0 0 7 18Z"/>',
        'spark' => '<path d="M12 2v5M12 17v5M2 12h5M17 12h5M4.9 4.9l3.5 3.5M15.6 15.6l3.5 3.5M4.9 19.1l3.5-3.5M15.6 8.4l3.5-3.5"/>',
        'shield' => '<path d="M12 2 4 5.5v6c0 5 3.4 9 8 10.5 4.6-1.5 8-5.5 8-10.5v-6Z"/><path d="m8.5 12 2.5 2.5 4.5-5"/>',
        'compass' => '<circle cx="12" cy="12" r="10"/><path d="m15.5 8.5-2 5-5 2 2-5Z"/>',
        'check' => '<path d="m4 12 5 5L20 6"/>',
        'arrow' => '<path d="M5 12h14M13 6l6 6-6 6"/>',
        'mail' => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="m3 6 9 7 9-7"/>',
        'pin' => '<path d="M12 22s7-6.2 7-12a7 7 0 0 0-14 0c0 5.8 7 12 7 12Z"/><circle cx="12" cy="10" r="2.5"/>',
        'tel' => '<path d="M5 3h4l2 5-2.5 1.5a11 11 0 0 0 6 6L16 13l5 2v4a2 2 0 0 1-2 2A17 17 0 0 1 3 5a2 2 0 0 1 2-2Z"/>',
        'clay' => '<rect x="4" y="3" width="16" height="18" rx="2"/><path d="M8 8h3l-1.5 2.5M13 8h3l-1.5 2.5M8 14h3l-1.5 2.5M13 14h3l-1.5 2.5"/>',
        'layers' => '<path d="m12 2 10 5-10 5L2 7Z"/><path d="m2 12 10 5 10-5M2 17l10 5 10-5"/>',
        'handshake' => '<path d="M3 11h3l4-4 3 2 2-2h6v6l-5 5-3-3-3 3-7-7Z"/>',
        'menu' => '<path d="M3 6h18M3 12h18M3 18h18"/>',
    ];
@endphp
<svg class="icon {{ $class ?? '' }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $paths[$name] ?? '' !!}</svg>

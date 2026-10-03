<?php

return [
    'name' => env('COMPANY_NAME', 'The Spark of Akkad LLC'),
    'short_name' => 'Spark of Akkad',
    'tagline' => 'Ancient ingenuity. Modern technology.',
    'email' => env('COMPANY_EMAIL', 'hello@sparkofakkad.com'),
    'phone' => env('COMPANY_PHONE', '+1 (555) 555-0123'),
    'location' => env('COMPANY_LOCATION', 'United States'),

    // International format, digits only (country code + number), e.g. 15555550123
    'whatsapp' => preg_replace('/\D/', '', (string) env('WHATSAPP_NUMBER', '15555550123')),
    'whatsapp_message' => env('WHATSAPP_MESSAGE', 'Hello Spark of Akkad, I would like to talk about a project.'),
];

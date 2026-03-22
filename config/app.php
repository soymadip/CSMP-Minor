<?php

return [
    // ----------------- Application Core --------------

    'name' => env('APP_NAME', 'CSMP'),
    'full_name' => env('APP_FULL_NAME', 'CTS Student Management Portal'),
    'url' => env('APP_URL', 'http://localhost'),
    'repo' => env('APP_REPO', '#'),
    'timezone' => env('APP_TIMEZONE', 'Asia/Kolkata'),
    'locale' => env('APP_LOCALE', 'en'),

    'env' => env('APP_ENV', 'production'),
    'debug' => (bool) env('APP_DEBUG', false),
    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),
    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),
    'cipher' => 'AES-256-CBC',
    'key' => env('APP_KEY'),
    'previous_keys' => [
        ...array_filter(
            explode(',', env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    // ----------------- Default Admin Credentials --------------

    'superadmin' => [
        'email' => env('SUPERADMIN_EMAIL', 'admin@example.com'),
        'password' => env('SUPERADMIN_PASSWORD', 'password'),
    ],

    // ------------------------ PhpMyAdmin ---------------------
    'pma' => [
        'url' => env('PMA_URL', 'http://localhost:8080'),
        'theme' => env('PMA_THEME', 'metro'),
    ],

    // ----------------- Institutional Identity --------------

    'institute' => [
        'name' => env('INSTITUTE_NAME', 'The Calcutta Technical School'),
        'subtitle' => env('INSTITUTE_SUBTITLE', 'Govt. of W.B'),
        'address' => env('INSTITUTE_ADDRESS', '110, S.N. BANERJEE ROAD, KOLKATA-700 013'),
        'phone' => env('INSTITUTE_PHONE', 'Not Available'),
        'map_url' => env('INSTITUTE_MAP_URL', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.461027015059!2d88.35479071171858!3d22.561854133277084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02770731aeafcf%3A0x70b7fa2f49a82e14!2sThe%20Calcutta%20Technical%20School!5e0!3m2!1sen!2sin!4v1773561647084!5m2!1sen!2sin'),
    ],

    // ----------------- Drivers & Queues ----------------

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],
];

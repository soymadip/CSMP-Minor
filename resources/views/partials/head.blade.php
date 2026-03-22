<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

@php
    $appName = config('app.name');
    $pageTitle = $title ?? 'Home';
    // Remove "CSMP - " if it already exists at the start to prevent double prefixing
    $cleanTitle = str_replace($appName . ' - ', '', $pageTitle);
    $fullTitle = "{$appName} - {$cleanTitle}";
@endphp
<title>{{ $fullTitle }}</title>

<link rel="icon" href="{{ asset('img/cts/logo.ico') }}" sizes="any">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

@fluxAppearance
@vite(['resources/css/app.css', 'resources/js/app.js'])

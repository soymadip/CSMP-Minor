<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

@php
    $appName = config('app.name', 'CSMP');
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

<script>
    if (!localStorage.getItem('flux.appearance')) {
        localStorage.setItem('flux.appearance', 'dark');
    }
    if (localStorage.getItem('flux.appearance') === 'dark') {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
</script>

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head', ['title' => $title ?? null])
</head>

<body
    class="h-screen flex flex-col bg-cover bg-center bg-no-repeat overflow-hidden font-['Outfit',sans-serif] text-slate-800 in-[.dark]:text-white bg-white in-[.dark]:bg-slate-900 transition-colors duration-300"
    style="background-image: url('{{ asset('img/cts/bg.png') }}'); background-size: 100% 200%;">
    <x-nav />

    <!-- Auth Section -->
    <div
        class="flex-1 flex flex-col items-center justify-center px-4 py-8 bg-black/40 backdrop-blur-md overflow-y-auto border-y border-white/10 min-h-0">
        <div class="w-full max-w-md transition-all duration-700 starting:opacity-0 starting:translate-y-5">
            <div
                class="bg-white/80 in-[.dark]:bg-slate-900/90 shadow-2xl rounded-2xl overflow-hidden border border-rose-500/20 backdrop-blur-2xl p-8">
                @if($title)
                    <div class="text-center mb-8">
                        <h1 class="text-4xl font-bold text-rose-500 mb-2 drop-shadow-lg">{{ $title }}</h1>
                    </div>
                @endif
                {{ $slot }}
            </div>
        </div>
    </div>
    <x-footer />
    @fluxScripts
    <script src="{{ asset('js/utils.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
</body>

</html>
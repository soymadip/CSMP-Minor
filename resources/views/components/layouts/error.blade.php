@props([
    'code',           // e.g. 404, 403, 500
    'title',          // Browser tab title
    'heading',        // Large display text (e.g. "Oops! You've drifted away.")
    'message',        // Detailed description
    'actionText',     // Text for the primary button
    'actionRoute',    // Named route for the primary button (defaults to 'home')
    'icon' => null,   // Optional icon name
])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head', ['title' => $title])
</head>

<body
  class="h-screen overflow-hidden flex flex-col bg-cover bg-center bg-no-repeat font-['Outfit',sans-serif] text-slate-800 in-[.dark]:text-white bg-white in-[.dark]:bg-slate-900 transition-colors duration-300"
  style="
      background-image: url(&quot;{{ asset('img/cts/bg.png') }}&quot;);
      background-size: 100% 200%;
    ">
    <x-nav />

    <main
        class="flex-1 flex flex-col justify-center items-center p-6 bg-black/40 backdrop-blur-md border-y border-white/10 transition-all duration-700">
        <div class="w-full max-w-2xl transition-all duration-700 starting:opacity-0 starting:translate-y-5">
            <div
                class="bg-white/80 in-[.dark]:bg-slate-900/90 shadow-2xl rounded-2xl overflow-hidden border border-rose-500/20 backdrop-blur-2xl p-12 text-center space-y-8">
                
                @if($icon)
                <!-- Icon -->
                <div class="flex justify-center">
                    <div class="p-6 rounded-3xl bg-rose-500/10 text-rose-500 shadow-inner">
                        <x-icon :name="$icon" class="w-24 h-24" />
                    </div>
                </div>
                @endif

                <!-- Error Code -->
                <h1
                    class="text-9xl font-black tracking-tighter text-transparent bg-clip-text bg-linear-to-br from-rose-400 to-rose-600 drop-shadow-2xl">
                    {{ $code }}
                </h1>

                <!-- Message -->
                <div class="space-y-4">
                    <h2 class="text-4xl font-bold tracking-tight">{{ $heading }}</h2>
                    <p class="text-lg text-slate-600 in-[.dark]:text-slate-300 font-medium max-w-md mx-auto">
                        {{ $message }}
                    </p>
                </div>

                <!-- Action Button -->
                <div class="pt-4">
                    <a href="{{ route($actionRoute ?? 'home') }}"
                        class="inline-flex items-center gap-2 px-8 py-4 bg-rose-500 hover:bg-rose-600 focus:ring-4 focus:ring-rose-500/20 text-white rounded-2xl font-bold text-lg shadow-xl shadow-rose-500/25 transition-all hover:-translate-y-1 active:scale-95 group">
                        @if($actionRoute === 'dashboard')
                            Go to My Dashboard
                        @else
                            <x-icon name="home" class="w-6 h-6 transition-transform group-hover:scale-110" />
                            {{ $actionText ?? 'Return to Home' }}
                        @endif
                    </a>
                </div>
            </div>
        </div>
    </main>

    <x-footer />

    <!-- JavaScript -->
    <script src="{{ asset('js/utils.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
</body>

</html>

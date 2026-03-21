<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body
        class="h-screen flex flex-col bg-cover bg-center bg-no-repeat overflow-hidden font-['Outfit',sans-serif] text-slate-800 in-[.dark]:text-white bg-white in-[.dark]:bg-slate-900 transition-colors duration-300"
        style="background-image: url('{{ asset('img/cts.png') }}'); background-size: 100% 200%;"
    >
        <!-- Navbar -->
        <nav
            class="flex items-center justify-between px-4 h-16 bg-white/70 in-[.dark]:bg-slate-800/60 text-slate-800 in-[.dark]:text-white backdrop-blur-3xl shadow-lg border-b border-rose-200 in-[.dark]:border-rose-500/10 z-50 transition-colors duration-300 shrink-0"
        >
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="text-xl font-bold flex items-center gap-1" wire:navigate>
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-12 h-12" />
                    CSMP
                </a>
            </div>

            <div class="flex items-center gap-4">
                <button
                    id="theme-toggle"
                    class="p-2 hover:bg-white/10 rounded-full transition-colors relative h-10 w-10 overflow-hidden"
                >
                    <input
                        type="checkbox"
                        class="theme-controller opacity-0 absolute inset-0 cursor-pointer z-10"
                        value="dark"
                    />
                    <span
                        class="inline-block mask-no-repeat mask-center mask-contain bg-current w-6 h-6 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 transition-transform duration-300 in-[.dark]:scale-0"
                        style="mask-image: url('{{ asset('img/svg/sun.svg') }}'); -webkit-mask-image: url('{{ asset('img/svg/sun.svg') }}');"
                    ></span>
                    <span
                        class="inline-block mask-no-repeat mask-center mask-contain bg-current w-6 h-6 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 transition-transform duration-300 scale-0 in-[.dark]:scale-100"
                        style="mask-image: url('{{ asset('img/svg/moon.svg') }}'); -webkit-mask-image: url('{{ asset('img/svg/moon.svg') }}');"
                    ></span>
                </button>

                <a
                    href="{{ route('home') }}"
                    class="flex items-center gap-2 px-4 h-10 bg-slate-50/80 in-[.dark]:bg-white/5 border border-slate-100/60 in-[.dark]:border-white/20 backdrop-blur-md rounded-2xl hover:bg-slate-50/80 in-[.dark]:bg-white/5/20 transition-all shadow-sm"
                    wire:navigate
                >
                    <span
                        class="inline-block mask-no-repeat mask-center mask-contain bg-current w-4 h-4"
                        style="mask-image: url('{{ asset('img/svg/home.svg') }}'); -webkit-mask-image: url('{{ asset('img/svg/home.svg') }}');"
                    ></span>
                    Home
                </a>
            </div>
        </nav>

        <!-- Auth Section -->
        <div class="flex-1 flex items-center justify-center px-4 py-8 bg-black/40 backdrop-blur-md overflow-y-auto border-y border-white/10">
            <div class="w-full max-w-md transition-all duration-700 starting:opacity-0 starting:translate-y-5">
                <div class="bg-white/80 in-[.dark]:bg-slate-900/90 shadow-2xl rounded-2xl overflow-hidden border border-rose-500/20 backdrop-blur-2xl p-8">
                    @if($title)
                        <div class="text-center mb-8">
                            <h1 class="text-4xl font-bold text-rose-500 mb-2 drop-shadow-lg">{{ $title }}</h1>
                        </div>
                    @endif
                    {{ $slot }}
                </div>
            </div>
        </div>
        @fluxScripts
    </body>
</html>

<!doctype html>
<html lang="en" class="dark">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('img/logo.png') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>CSMP - Home</title>
  </head>
  <body
    class="h-screen overflow-hidden flex flex-col bg-cover bg-center bg-no-repeat font-['Outfit',sans-serif] text-slate-800 in-[.dark]:text-white bg-white in-[.dark]:bg-slate-900 transition-colors duration-300"
    style="
      background-image: url(&quot;{{ asset('img/cts.png') }}&quot;);
      background-size: 100% 200%;
    "
  >
    <!-- Navbar -->
    <nav
      class="flex items-center justify-between px-4 h-16 bg-white/70 in-[.dark]:bg-slate-800/60 text-slate-800 in-[.dark]:text-white backdrop-blur-3xl shadow-lg border-b border-rose-200 in-[.dark]:border-rose-500/10 z-50 transition-colors duration-300 shrink-0"
    >
      <div class="flex items-center">
        <a href="{{ route('home') }}" class="text-xl font-bold flex items-center gap-1">
          <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-12 h-12" />
          CSMP
        </a>
      </div>
      <!-- Main Navigation Menu -->
      <div class="hidden lg:flex items-center gap-6 text-lg font-semibold">
        <a
          href="{{ route('home') }}"
          class="text-rose-500 flex items-center gap-2 h-full transition-all duration-300 hover:opacity-80"
        >
          <span
            class="inline-block mask-no-repeat mask-center mask-contain bg-current w-5 h-5"
            style="
              mask-image: url(&quot;{{ asset('img/svg/home.svg') }}&quot;);
              -webkit-mask-image: url(&quot;{{ asset('img/svg/home.svg') }}&quot;);
            "
          ></span>
          Home
        </a>
        <!-- Departments Dropdown -->
        <div class="relative group">
          <button
            class="flex items-center gap-2 hover:text-rose-500 transition-colors py-2"
          >
            <span
              class="inline-block mask-no-repeat mask-center mask-contain bg-current w-5 h-5"
              style="
                mask-image: url(&quot;{{ asset('img/svg/graduation-cap.svg') }}&quot;);
                -webkit-mask-image: url(&quot;{{ asset('img/svg/graduation-cap.svg') }}&quot;);
              "
            ></span>
            Departments
            <span
              class="inline-block mask-no-repeat mask-center mask-contain bg-current w-3.5 h-3.5"
              style="
                mask-image: url(&quot;{{ asset('img/svg/chevron-down.svg') }}&quot;);
                -webkit-mask-image: url(&quot;{{ asset('img/svg/chevron-down.svg') }}&quot;);
              "
            ></span>
          </button>
          <div
            class="absolute top-full left-0 hidden group-hover:block transition-all pt-2"
          >
            <ul
              class="bg-white/60 in-[.dark]:bg-rose-950/70 rounded-2xl shadow-2xl w-60 border border-rose-100 in-[.dark]:border-red-500/20 backdrop-blur-3xl p-2"
            >
              <li>
                <a
                  href="/departments/civil"
                  class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-4.5 h-4.5 text-orange-400"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/building.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/building.svg') }}&quot;);
                    "
                  ></span>
                  Civil Engineering
                </a>
              </li>
              <li>
                <a
                  href="/departments/electrical"
                  class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-4.5 h-4.5 text-yellow-400"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/bolt.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/bolt.svg') }}&quot;);
                    "
                  ></span>
                  Electrical Engineering
                </a>
              </li>
              <li>
                <a
                  href="/departments/cst"
                  class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-4.5 h-4.5 text-blue-400"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/monitor.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/monitor.svg') }}&quot;);
                    "
                  ></span>
                  Computer Science
                </a>
              </li>
              <li>
                <a
                  href="/departments/mechanical"
                  class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-4.5 h-4.5 text-slate-400"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/settings.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/settings.svg') }}&quot;);
                    "
                  ></span>
                  Mechanical Engineering
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- Academics Dropdown -->
        <div class="relative group">
          <button
            class="flex items-center gap-2 hover:text-rose-500 transition-colors py-2"
          >
            <span
              class="inline-block mask-no-repeat mask-center mask-contain bg-current w-5 h-5"
              style="
                mask-image: url(&quot;{{ asset('img/svg/book-open.svg') }}&quot;);
                -webkit-mask-image: url(&quot;{{ asset('img/svg/book-open.svg') }}&quot;);
              "
            ></span>
            Academics
            <span
              class="inline-block mask-no-repeat mask-center mask-contain bg-current w-3.5 h-3.5"
              style="
                mask-image: url(&quot;{{ asset('img/svg/chevron-down.svg') }}&quot;);
                -webkit-mask-image: url(&quot;{{ asset('img/svg/chevron-down.svg') }}&quot;);
              "
            ></span>
          </button>
          <div
            class="absolute top-full left-0 hidden group-hover:block transition-all pt-2"
          >
            <ul
              class="bg-white/60 in-[.dark]:bg-rose-950/70 rounded-2xl shadow-2xl w-52 border border-rose-100 in-[.dark]:border-red-500/20 backdrop-blur-3xl p-2"
            >
              <li>
                <a
                  href="/academics/calendar"
                  class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-4.5 h-4.5 text-rose-400"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/calendar.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/calendar.svg') }}&quot;);
                    "
                  ></span>
                  Academic Calendar
                </a>
              </li>
              <li>
                <a
                  href="/academics/syllabus"
                  class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-4.5 h-4.5 text-indigo-400"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/file-text.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/file-text.svg') }}&quot;);
                    "
                  ></span>
                  Syllabus
                </a>
              </li>
              <li>
                <a
                  href="/academics/examinations"
                  class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-4.5 h-4.5 text-emerald-400"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/clipboard-check.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/clipboard-check.svg') }}&quot;);
                    "
                  ></span>
                  Examination
                </a>
              </li>
              <li>
                <a
                  href="/academics/library"
                  class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-4.5 h-4.5 text-cyan-400"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/library.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/library.svg') }}&quot;);
                    "
                  ></span>
                  Library
                </a>
              </li>
              <li>
                <a
                  href="/academics/results"
                  class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-4.5 h-4.5 text-orange-400"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/results.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/results.svg') }}&quot;);
                    "
                  ></span>
                  Results
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- Portal Dropdown -->
        <div class="relative group">
          <button
            class="flex items-center gap-2 hover:text-rose-500 transition-colors py-2"
          >
            <span
              class="inline-block mask-no-repeat mask-center mask-contain bg-current w-5 h-5"
              style="
                mask-image: url(&quot;{{ asset('img/svg/shield.svg') }}&quot;);
                -webkit-mask-image: url(&quot;{{ asset('img/svg/shield.svg') }}&quot;);
              "
            ></span>
            Portal
            <span
              class="inline-block mask-no-repeat mask-center mask-contain bg-current w-3.5 h-3.5"
              style="
                mask-image: url(&quot;{{ asset('img/svg/chevron-down.svg') }}&quot;);
                -webkit-mask-image: url(&quot;{{ asset('img/svg/chevron-down.svg') }}&quot;);
              "
            ></span>
          </button>
          <div
            class="absolute top-full left-0 hidden group-hover:block transition-all pt-2"
          >
            <ul
              class="bg-white/60 in-[.dark]:bg-rose-950/70 rounded-2xl shadow-2xl w-52 border border-rose-100 in-[.dark]:border-red-500/20 backdrop-blur-3xl p-2"
            >
              <li>
                <a
                  href="/portal/add-student"
                  class="flex gap-3 items-center p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-4.5 h-4.5 text-rose-500"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/user-plus.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/user-plus.svg') }}&quot;);
                    "
                  ></span>
                  Add Students
                </a>
              </li>
              <li>
                <a
                  href="/portal/records"
                  class="flex gap-3 items-center p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-4.5 h-4.5 text-indigo-500"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/file-search.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/file-search.svg') }}&quot;);
                    "
                  ></span>
                  View Records
                </a>
              </li>
              <li>
                <a
                  href="/portal/reports"
                  class="flex gap-3 items-center p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-4.5 h-4.5 text-emerald-500"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/file-line-chart.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/file-line-chart.svg') }}&quot;);
                    "
                  ></span>
                  Generate Reports
                </a>
              </li>
              <li>
                <a
                  href="/portal/scholarships"
                  class="flex gap-3 items-center p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-4.5 h-4.5 text-amber-500"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/award.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/award.svg') }}&quot;);
                    "
                  ></span>
                  Scholarships
                </a>
              </li>
              <li>
                <a
                  href="/portal/placement"
                  class="flex gap-3 items-center p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-4.5 h-4.5 text-lime-400"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/briefcase.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/briefcase.svg') }}&quot;);
                    "
                  ></span>
                  Placements
                </a>
              </li>
            </ul>
          </div>
        </div>
        <a
          class="flex items-center gap-2 hover:text-rose-500 transition-colors py-2"
          href="/notices"
        >
          <span
            class="inline-block mask-no-repeat mask-center mask-contain bg-current w-5 h-5 text-red-500"
            style="
              mask-image: url(&quot;{{ asset('img/svg/bell.svg') }}&quot;);
              -webkit-mask-image: url(&quot;{{ asset('img/svg/bell.svg') }}&quot;);
            "
          ></span>
          Notices
        </a>
        <a
          href="{{ route('about') }}"
          class="flex items-center gap-2 hover:text-rose-500 transition-colors py-2"
        >
          <span
            class="inline-block mask-no-repeat mask-center mask-contain bg-current w-5 h-5 text-emerald-400"
            style="
              mask-image: url(&quot;{{ asset('img/svg/building.svg') }}&quot;);
              -webkit-mask-image: url(&quot;{{ asset('img/svg/building.svg') }}&quot;);
            "
          ></span>
          Institute
        </a>
      </div>
      <div class="flex items-center gap-4">
        <!-- Theme Toggle -->
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
            style="
              mask-image: url(&quot;{{ asset('img/svg/sun.svg') }}&quot;);
              -webkit-mask-image: url(&quot;{{ asset('img/svg/sun.svg') }}&quot;);
            "
          ></span>
          <span
            class="inline-block mask-no-repeat mask-center mask-contain bg-current w-6 h-6 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 transition-transform duration-300 scale-0 in-[.dark]:scale-100"
            style="
              mask-image: url(&quot;{{ asset('img/svg/moon.svg') }}&quot;);
              -webkit-mask-image: url(&quot;{{ asset('img/svg/moon.svg') }}&quot;);
            "
          ></span>
        </button>
        <!-- Auth Dropdown -->
        <div class="relative group">
          @auth
          <button
            class="flex items-center gap-2 px-4 h-10 bg-slate-50/80 in-[.dark]:bg-white/5 border border-slate-100/60 in-[.dark]:border-white/20 backdrop-blur-md rounded-2xl hover:bg-slate-50/80 in-[.dark]:bg-white/5/20 transition-all group shadow-sm cursor-pointer"
          >
             <span class="text-lg font-medium tracking-wide">{{ Auth::user()->name }}</span>
             <span
              class="inline-block mask-no-repeat mask-center mask-contain bg-current w-3.5 h-3.5 opacity-50 transition-transform group-hover:rotate-180"
              style="
                mask-image: url(&quot;{{ asset('img/svg/chevron-down.svg') }}&quot;);
                -webkit-mask-image: url(&quot;{{ asset('img/svg/chevron-down.svg') }}&quot;);
              "
            ></span>
          </button>
          <div
            class="absolute top-full right-0 hidden group-hover:block transition-all pt-2 min-w-[160px]"
          >
            <ul
              class="bg-white/60 in-[.dark]:bg-rose-950/70 rounded-2xl shadow-2xl border border-rose-100 in-[.dark]:border-red-500/20 backdrop-blur-3xl p-2"
            >
              <li>
                <a
                  href="{{ route('dashboard') }}"
                  class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"
                >
                   Dashboard
                </a>
              </li>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors">
                        Logout
                    </button>
                </form>
              </li>
            </ul>
          </div>
          @else
          <button
            class="flex items-center gap-2 px-4 h-10 bg-slate-50/80 in-[.dark]:bg-white/5 border border-slate-100/60 in-[.dark]:border-white/20 backdrop-blur-md rounded-2xl hover:bg-slate-50/80 in-[.dark]:bg-white/5/20 transition-all group shadow-sm cursor-pointer"
          >
            <div
              class="w-6 h-6 rounded-full bg-rose-500/20 flex items-center justify-center group-hover:bg-rose-500/30 transition-colors"
            >
              <span
                class="inline-block mask-no-repeat mask-center mask-contain bg-current w-3.5 h-3.5 text-rose-500"
                style="
                  mask-image: url(&quot;{{ asset('img/svg/user-plus.svg') }}&quot;);
                  -webkit-mask-image: url(&quot;{{ asset('img/svg/user-plus.svg') }}&quot;);
                "
              ></span>
            </div>
            <span class="text-lg font-medium tracking-wide">Account</span>
            <span
              class="inline-block mask-no-repeat mask-center mask-contain bg-current w-3.5 h-3.5 opacity-50 transition-transform group-hover:rotate-180"
              style="
                mask-image: url(&quot;{{ asset('img/svg/chevron-down.svg') }}&quot;);
                -webkit-mask-image: url(&quot;{{ asset('img/svg/chevron-down.svg') }}&quot;);
              "
            ></span>
          </button>
          <div
            class="absolute top-full right-0 hidden group-hover:block transition-all pt-2 min-w-[160px]"
          >
            <ul
              class="bg-white/60 in-[.dark]:bg-rose-950/70 rounded-2xl shadow-2xl border border-rose-100 in-[.dark]:border-red-500/20 backdrop-blur-3xl p-2"
            >
              <li>
                <a
                  href="{{ route('login') }}"
                  class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-4.5 h-4.5 text-rose-500"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/power.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/power.svg') }}&quot;);
                    "
                  ></span>
                  Login
                </a>
              </li>
              <li>
                <a
                  href="{{ route('register') }}"
                  class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-4.5 h-4.5 text-indigo-500"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/user-plus.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/user-plus.svg') }}&quot;);
                    "
                  ></span>
                  Signup
                </a>
              </li>
            </ul>
          </div>
          @endauth
        </div>
      </div>
    </nav>
    <!-- Portal Dashboard -->
    <main
      class="flex-1 flex flex-col justify-center py-6 bg-black/40 backdrop-blur-md border-y border-white/10 transition-all duration-700 starting:opacity-0 starting:translate-y-5 min-h-0"
    >
      <div class="container mx-auto px-4 max-w-6xl">
        <h1
          class="text-4xl md:text-6xl font-bold text-white text-center mb-10 drop-shadow-2xl transition-all duration-700 starting:opacity-0 starting:translate-y-5"
          style="animation-delay: 0.2s"
        >
          Welcome to
          <span class="text-rose-500"
            ><a href="https://github.com/soymadip/csmp-minor">CSMP</a></span
          >
        </h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
          <!-- Portal Quick Access -->
          <div
            class="rounded-2xl shadow-lg bg-white in-[.dark]:bg-slate-900 p-8"
          >
            <div>
              <h2
                class="text-3xl font-bold text-rose-500 mb-4 border-b border-slate-100 in-[.dark]:border-slate-700 pb-3 flex items-center gap-2"
              >
                <span
                  class="inline-block mask-no-repeat mask-center mask-contain bg-current h-7 w-7"
                  style="
                    mask-image: url(&quot;{{ asset('img/svg/bolt.svg') }}&quot;);
                    -webkit-mask-image: url(&quot;{{ asset('img/svg/bolt.svg') }}&quot;);
                  "
                ></span>
                Quick Access
              </h2>
              <div class="grid grid-cols-2 gap-4">
                <!-- Results -->
                <a
                  href="/academics/results"
                  class="flex flex-col items-center justify-center p-4 rounded-2xl border border-slate-800/10 in-[.dark]:border-white/10 bg-slate-50 in-[.dark]:bg-slate-800/50 hover:bg-green-500 hover:text-white transition-all duration-300 group"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-8 h-8 mb-2 group-hover:scale-110 transition-transform"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/results.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/results.svg') }}&quot;);
                    "
                  ></span>
                  <span
                    class="text-xs font-bold uppercase tracking-wider text-center"
                    >Results</span
                  >
                </a>
                <!-- Scholarships -->
                <a
                  href="/portal/scholarships"
                  class="flex flex-col items-center justify-center p-4 rounded-2xl border border-slate-800/10 in-[.dark]:border-white/10 bg-slate-50 in-[.dark]:bg-slate-800/50 hover:bg-amber-500 hover:text-white transition-all duration-300 group"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-8 h-8 mb-2 group-hover:scale-110 transition-transform"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/award.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/award.svg') }}&quot;);
                    "
                  ></span>
                  <span
                    class="text-xs font-bold uppercase tracking-wider text-center"
                    >Scholarships</span
                  >
                </a>
                <!-- Academic Calendar -->
                <a
                  href="/academics/calendar"
                  class="flex flex-col items-center justify-center p-4 rounded-2xl border border-slate-800/10 in-[.dark]:border-white/10 bg-slate-50 in-[.dark]:bg-slate-800/50 hover:bg-blue-500 hover:text-white transition-all duration-300 group"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-8 h-8 mb-2 group-hover:scale-110 transition-transform"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/calendar.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/calendar.svg') }}&quot;);
                    "
                  ></span>
                  <span
                    class="text-xs font-bold uppercase tracking-wider text-center"
                    >Calendar</span
                  >
                </a>
                <!-- Downloads -->
                <a
                  href="/downloads"
                  class="flex flex-col items-center justify-center p-4 rounded-2xl border border-slate-800/10 in-[.dark]:border-white/10 bg-slate-50 in-[.dark]:bg-slate-800/50 hover:bg-slate-500 hover:text-white transition-all duration-300 group"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-8 h-8 mb-2 group-hover:scale-110 transition-transform"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/bolt.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/bolt.svg') }}&quot;);
                    "
                  ></span>
                  <span
                    class="text-xs font-bold uppercase tracking-wider text-center"
                    >Downloads</span
                  >
                </a>
                <!-- Syllabus -->
                <a
                  href="/academics/syllabus"
                  class="flex flex-col items-center justify-center p-4 rounded-2xl border border-slate-800/10 in-[.dark]:border-white/10 bg-slate-50 in-[.dark]:bg-slate-800/50 hover:bg-emerald-500 hover:text-white transition-all duration-300 group"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-8 h-8 mb-2 group-hover:scale-110 transition-transform"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/file-text.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/file-text.svg') }}&quot;);
                    "
                  ></span>
                  <span
                    class="text-xs font-bold uppercase tracking-wider text-center"
                    >Syllabus</span
                  >
                </a>
                <!-- Library -->
                <a
                  href="/academics/library"
                  class="flex flex-col items-center justify-center p-4 rounded-2xl border border-slate-800/10 in-[.dark]:border-white/10 bg-slate-50 in-[.dark]:bg-slate-800/50 hover:bg-indigo-500 hover:text-white transition-all duration-300 group"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-8 h-8 mb-2 group-hover:scale-110 transition-transform"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/library.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/library.svg') }}&quot;);
                    "
                  ></span>
                  <span
                    class="text-xs font-bold uppercase tracking-wider text-center"
                    >Library</span
                  >
                </a>
                <!-- Placements -->
                <a
                  href="/portal/placement"
                  class="flex flex-col items-center justify-center p-4 rounded-2xl border border-slate-800/10 in-[.dark]:border-white/10 bg-slate-50 in-[.dark]:bg-slate-800/50 hover:bg-rose-500 hover:text-white transition-all duration-300 group"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-8 h-8 mb-2 group-hover:scale-110 transition-transform"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/briefcase.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/briefcase.svg') }}&quot;);
                    "
                  ></span>
                  <span
                    class="text-xs font-bold uppercase tracking-wider text-center"
                    >Placements</span
                  >
                </a>
                <!-- Examinations -->
                <a
                  href="/academics/examinations"
                  class="flex flex-col items-center justify-center p-4 rounded-2xl border border-slate-800/10 in-[.dark]:border-white/10 bg-slate-50 in-[.dark]:bg-slate-800/50 hover:bg-red-500 hover:text-white transition-all duration-300 group"
                >
                  <span
                    class="inline-block mask-no-repeat mask-center mask-contain bg-current w-8 h-8 mb-2 group-hover:scale-110 transition-transform"
                    style="
                      mask-image: url(&quot;{{ asset('img/svg/clipboard-check.svg') }}&quot;);
                      -webkit-mask-image: url(&quot;{{ asset('img/svg/clipboard-check.svg') }}&quot;);
                    "
                  ></span>
                  <span
                    class="text-xs font-bold uppercase tracking-wider text-center"
                    >Examinations</span
                  >
                </a>
              </div>
            </div>
          </div>
          <!-- Notice Board -->
          <div
            class="rounded-2xl shadow-lg bg-white in-[.dark]:bg-slate-900 p-8"
          >
            <div>
              <h2
                class="text-3xl font-bold text-red-500 mb-4 border-b border-slate-100 in-[.dark]:border-slate-700 pb-3 flex items-center gap-2"
              >
                <span
                  class="inline-block mask-no-repeat mask-center mask-contain bg-current h-7 w-7"
                  style="
                    mask-image: url(&quot;{{ asset('img/svg/bell.svg') }}&quot;);
                    -webkit-mask-image: url(&quot;{{ asset('img/svg/bell.svg') }}&quot;);
                  "
                ></span>
                Notice Board
              </h2>
              <div
                class="flex flex-col gap-4 max-h-[500px] overflow-y-auto pr-2 scrollbar-thin scrollbar-thumb-error/20 scrollbar-track-transparent hover:scrollbar-thumb-error/40 transition-colors"
              >
                <!-- Notice Item Sample -->
                <div
                  class="p-4 rounded-xl border border-slate-800/10 in-[.dark]:border-white/10 bg-slate-50 in-[.dark]:bg-slate-800/50 hover:bg-slate-200 in-[.dark]:hover:bg-slate-700 transition-colors flex flex-col gap-3"
                >
                  <div class="flex justify-between items-start gap-4">
                    <p class="text-sm font-medium leading-relaxed">
                      [EXAMPLE] Application for Review of Results of 2nd & 4th
                      Semester External Theoretical Examinations
                    </p>
                    <span
                      class="shrink-0 uppercase font-bold px-3 py-1 text-[10px] rounded-full bg-red-500 text-white"
                      >MAY, 2025</span
                    >
                  </div>
                  <a
                    href="/apply/review"
                    class="px-4 py-2 border border-red-500/30 text-red-500 hover:bg-red-500 hover:text-white rounded-xl transition-all w-fit text-sm font-semibold"
                  >
                    Click to Apply
                  </a>
                </div>
              </div>
              <div class="mt-4 flex justify-end">
                <a
                  href="/notices"
                  class="text-rose-500 hover:underline text-sm font-medium"
                  >View all notices &rarr;</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer
      class="flex items-center justify-center p-2 bg-rose-950 in-[.dark]:bg-rose-950/30 text-white border-t border-white/5 backdrop-blur-xl mt-auto shrink-0"
    >
      <div>
        <p class="text-xs">&copy; {{ date('Y') }} CSMP (CTS Student Management Portal).</p>
      </div>
    </footer>
    <!-- JavaScript -->
    <script src="{{ asset('js/utils.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
  </body>
</html>

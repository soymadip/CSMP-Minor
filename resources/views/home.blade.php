<!doctype html>
<html lang="en">

<head>
  @include('partials.head', ['title' => 'Home'])
</head>

<body
  class="h-screen overflow-hidden flex flex-col bg-cover bg-center bg-no-repeat font-['Outfit',sans-serif] text-slate-800 in-[.dark]:text-white bg-white in-[.dark]:bg-slate-900 transition-colors duration-300"
  style="
      background-image: url(&quot;{{ asset('img/cts/bg.png') }}&quot;);
      background-size: 100% 200%;
    ">
  <x-nav />
  <!-- Portal Dashboard -->
  <main
    class="flex-1 flex flex-col justify-center py-6 bg-black/40 backdrop-blur-md border-y border-white/10 transition-all duration-700 starting:opacity-0 starting:translate-y-5 min-h-0">
    <div class="container mx-auto px-4 max-w-6xl">
      <h1
        class="text-4xl md:text-6xl font-bold text-white text-center mb-10 drop-shadow-2xl transition-all duration-700 starting:opacity-0 starting:translate-y-5"
        style="animation-delay: 0.2s">
        Welcome to
        <span class="text-rose-500"><a href="{{ config('app.repo') }}" target="_blank">{{ config('app.name') }}</a></span>
      </h1>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
        <!-- Portal Quick Access -->
        <div class="rounded-2xl shadow-lg bg-white in-[.dark]:bg-slate-900 p-8">
          <div>
            <h2
              class="text-3xl font-bold text-rose-500 mb-4 border-b border-slate-100 in-[.dark]:border-slate-700 pb-3 flex items-center gap-2">
              <x-icon name="bolt" class="h-7 w-7" />
              Quick Access
            </h2>
            <div class="grid grid-cols-2 gap-4">
              <!-- Results -->
              <a href="/academics/results"
                class="flex flex-col items-center justify-center p-4 rounded-2xl border border-slate-800/10 in-[.dark]:border-white/10 bg-slate-50 in-[.dark]:bg-slate-800/50 hover:bg-green-500 hover:text-white transition-all duration-300 group">
                <x-icon name="results" class="w-8 h-8 mb-2 group-hover:scale-110 transition-transform" />
                <span class="text-xs font-bold uppercase tracking-wider text-center">Results</span>
              </a>
              <!-- Scholarships -->
              <a href="/portal/scholarships"
                class="flex flex-col items-center justify-center p-4 rounded-2xl border border-slate-800/10 in-[.dark]:border-white/10 bg-slate-50 in-[.dark]:bg-slate-800/50 hover:bg-amber-500 hover:text-white transition-all duration-300 group">
                <x-icon name="award" class="w-8 h-8 mb-2 group-hover:scale-110 transition-transform" />
                <span class="text-xs font-bold uppercase tracking-wider text-center">Scholarships</span>
              </a>
              <!-- Academic Calendar -->
              <a href="/academics/calendar"
                class="flex flex-col items-center justify-center p-4 rounded-2xl border border-slate-800/10 in-[.dark]:border-white/10 bg-slate-50 in-[.dark]:bg-slate-800/50 hover:bg-blue-500 hover:text-white transition-all duration-300 group">
                <x-icon name="calendar" class="w-8 h-8 mb-2 group-hover:scale-110 transition-transform" />
                <span class="text-xs font-bold uppercase tracking-wider text-center">Calendar</span>
              </a>
              <!-- Downloads -->
              <a href="/downloads"
                class="flex flex-col items-center justify-center p-4 rounded-2xl border border-slate-800/10 in-[.dark]:border-white/10 bg-slate-50 in-[.dark]:bg-slate-800/50 hover:bg-slate-500 hover:text-white transition-all duration-300 group">
                <x-icon name="bolt" class="w-8 h-8 mb-2 group-hover:scale-110 transition-transform" />
                <span class="text-xs font-bold uppercase tracking-wider text-center">Downloads</span>
              </a>
              <!-- Syllabus -->
              <a href="/academics/syllabus"
                class="flex flex-col items-center justify-center p-4 rounded-2xl border border-slate-800/10 in-[.dark]:border-white/10 bg-slate-50 in-[.dark]:bg-slate-800/50 hover:bg-emerald-500 hover:text-white transition-all duration-300 group">
                <x-icon name="file-text" class="w-8 h-8 mb-2 group-hover:scale-110 transition-transform" />
                <span class="text-xs font-bold uppercase tracking-wider text-center">Syllabus</span>
              </a>
              <!-- Library -->
              <a href="/academics/library"
                class="flex flex-col items-center justify-center p-4 rounded-2xl border border-slate-800/10 in-[.dark]:border-white/10 bg-slate-50 in-[.dark]:bg-slate-800/50 hover:bg-indigo-500 hover:text-white transition-all duration-300 group">
                <x-icon name="library" class="w-8 h-8 mb-2 group-hover:scale-110 transition-transform" />
                <span class="text-xs font-bold uppercase tracking-wider text-center">Library</span>
              </a>
              <!-- Placements -->
              <a href="/portal/placement"
                class="flex flex-col items-center justify-center p-4 rounded-2xl border border-slate-800/10 in-[.dark]:border-white/10 bg-slate-50 in-[.dark]:bg-slate-800/50 hover:bg-rose-500 hover:text-white transition-all duration-300 group">
                <x-icon name="briefcase" class="w-8 h-8 mb-2 group-hover:scale-110 transition-transform" />
                <span class="text-xs font-bold uppercase tracking-wider text-center">Placements</span>
              </a>
              <!-- Examinations -->
              <a href="/academics/examinations"
                class="flex flex-col items-center justify-center p-4 rounded-2xl border border-slate-800/10 in-[.dark]:border-white/10 bg-slate-50 in-[.dark]:bg-slate-800/50 hover:bg-red-500 hover:text-white transition-all duration-300 group">
                <x-icon name="clipboard-check" class="w-8 h-8 mb-2 group-hover:scale-110 transition-transform" />
                <span class="text-xs font-bold uppercase tracking-wider text-center">Examinations</span>
              </a>
            </div>
          </div>
        </div>
        <!-- Notice Board -->
        <div class="rounded-2xl shadow-lg bg-white in-[.dark]:bg-slate-900 p-8">
          <div>
            <h2
              class="text-3xl font-bold text-red-500 mb-4 border-b border-slate-100 in-[.dark]:border-slate-700 pb-3 flex items-center gap-2">
              <x-icon name="bell" class="h-7 w-7" />
              Notice Board
            </h2>
            <div
              class="flex flex-col gap-4 max-h-125 overflow-y-auto pr-2 scrollbar-thin scrollbar-thumb-error/20 scrollbar-track-transparent hover:scrollbar-thumb-error/40 transition-colors">
              <!-- Notice Item Sample -->
              <div
                class="p-4 rounded-xl border border-slate-800/10 in-[.dark]:border-white/10 bg-slate-50 in-[.dark]:bg-slate-800/50 hover:bg-slate-200 in-[.dark]:hover:bg-slate-700 transition-colors flex flex-col gap-3">
                <div class="flex justify-between items-start gap-4">
                  <p class="text-sm font-medium leading-relaxed">
                    [EXAMPLE] Application for Review of Results of 2nd & 4th
                    Semester External Theoretical Examinations
                  </p>
                  <span
                    class="shrink-0 uppercase font-bold px-3 py-1 text-[10px] rounded-full bg-red-500 text-white">MAY,
                    2025</span>
                </div>
                <a href="/apply/review"
                  class="px-4 py-2 border border-red-500/30 text-red-500 hover:bg-red-500 hover:text-white rounded-xl transition-all w-fit text-sm font-semibold">
                  Click to Apply
                </a>
              </div>
            </div>
            <div class="mt-4 flex justify-end">
              <a href="/notices" class="text-rose-500 hover:underline text-sm font-medium">View all notices &rarr;</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <x-footer />
</body>

</html>
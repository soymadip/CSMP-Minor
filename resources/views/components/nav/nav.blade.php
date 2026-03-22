<!-- Navigation Blade Component (components/nav/nav.blade.php) -->

<nav
    class="flex items-center justify-between px-4 h-16 bg-white/70 in-[.dark]:bg-slate-800/60 text-slate-800 in-[.dark]:text-white backdrop-blur-3xl shadow-lg border-b border-rose-200 in-[.dark]:border-rose-500/10 z-50 transition-colors duration-300 shrink-0">
    <div class="flex items-center gap-2">
        <a href="{{ route('home') }}" class="text-xl font-bold flex items-center gap-1 group" wire:navigate>
            <img src="{{ asset('img/cts/logo.png') }}" alt="Logo"
                class="w-12 h-12 transition-transform group-hover:scale-105" />
            <span class="tracking-tight">{{ config('app.name') }}</span>
        </a>

    </div>
    <!-- Main Navigation Menu -->
    <div class="hidden lg:flex items-center gap-6 text-lg font-semibold">
        <x-nav-link :href="route('home')" :active="request()->routeIs('home')" icon="home" title="Home" />
        <x-nav-dropdown title="Departments" icon="graduation-cap">
            <li><a href="/departments/civil"
                    class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"><x-icon
                        name="building" class="text-orange-400" /> Civil Engineering</a></li>
            <li><a href="/departments/electrical"
                    class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"><x-icon
                        name="bolt" class="text-yellow-400" /> Electrical Engineering</a></li>
            <li><a href="/departments/cst"
                    class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"><x-icon
                        name="monitor" class="text-blue-400" /> Computer Science</a></li>
            <li><a href="/departments/mechanical"
                    class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"><x-icon
                        name="settings" class="text-slate-400" /> Mechanical Engineering</a></li>
        </x-nav-dropdown>
        <x-nav-dropdown title="Academics" icon="book-open">
            <li><a href="/academics/calendar"
                    class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"><x-icon
                        name="calendar" class="text-rose-400" /> Academic Calendar</a></li>
            <li><a href="/academics/syllabus"
                    class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"><x-icon
                        name="file-text" class="text-indigo-400" /> Syllabus</a></li>
            <li><a href="/academics/examinations"
                    class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"><x-icon
                        name="clipboard-check" class="text-emerald-400" /> Examination</a></li>
            <li><a href="/academics/library"
                    class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"><x-icon
                        name="library" class="text-cyan-400" /> Library</a></li>
            <li><a href="/academics/results"
                    class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"><x-icon
                        name="results" class="text-orange-400" /> Results</a></li>
        </x-nav-dropdown>
        <x-nav-dropdown title="Portal" icon="shield">
            <li><a href="/portal/add-student"
                    class="flex gap-3 items-center p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"><x-icon
                        name="user-plus" class="text-rose-500" /> Add Students</a></li>
            <li><a href="/portal/records"
                    class="flex gap-3 items-center p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"><x-icon
                        name="file-search" class="text-indigo-500" /> View Records</a></li>
            <li><a href="/portal/reports"
                    class="flex gap-3 items-center p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"><x-icon
                        name="file-line-chart" class="text-emerald-500" /> Generate Reports</a></li>
            <li><a href="/portal/scholarships"
                    class="flex gap-3 items-center p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"><x-icon
                        name="award" class="text-amber-500" /> Scholarships</a></li>
            <li><a href="/portal/placement"
                    class="flex gap-3 items-center p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"><x-icon
                        name="briefcase" class="text-lime-400" /> Placements</a></li>
        </x-nav-dropdown>
        <x-nav-link href="/notices" :active="request()->is('notices')" icon="bell" :class="request()->is('notices') ? 'text-red-500' : ''" title="Notices" />
        <x-nav-link :href="route('about')" :active="request()->routeIs('about')" icon="building"
            :class="request()->routeIs('about') ? 'text-emerald-400' : ''" title="About" />
    </div>
    <div class="flex items-center gap-4">
        <x-theme-toggle />
        <!-- Auth Dropdown -->
        <div class="relative group">
            @auth
                <button
                    class="flex items-center gap-2 px-4 h-10 bg-slate-50/80 in-[.dark]:bg-white/5 border border-slate-100/60 in-[.dark]:border-white/20 backdrop-blur-md rounded-2xl hover:bg-slate-50/80 in-[.dark]:bg-white/5/20 transition-all group shadow-sm cursor-pointer">
                    <div
                        class="w-6 h-6 rounded-full bg-rose-500/20 flex items-center justify-center group-hover:bg-rose-500/30 transition-colors">
                        <x-icon name="user" class="text-rose-500 w-3.5 h-3.5" />
                    </div>
                    <span class="text-lg font-medium tracking-wide">{{ Auth::user()->name }}</span>
                    <x-icon name="chevron-down"
                        class="opacity-50 transition-transform group-hover:rotate-180 w-3.5 h-3.5" />
                </button>
                <div class="absolute top-full right-0 hidden group-hover:block transition-all pt-2 min-w-40">
                    <ul
                        class="bg-white/60 in-[.dark]:bg-rose-950/70 rounded-2xl shadow-2xl border border-rose-100 in-[.dark]:border-red-500/20 backdrop-blur-3xl p-2">
                        <li><a href="{{ route('dashboard') }}"
                                class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"
                                wire:navigate><x-icon name="results" class="text-indigo-400 w-4.5 h-4.5" />Dashboard</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"><x-icon
                                        name="power" class="text-rose-500 w-4.5 h-4.5" />Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <button
                    class="flex items-center gap-2 px-4 h-10 bg-slate-50/80 in-[.dark]:bg-white/5 border border-slate-100/60 in-[.dark]:border-white/20 backdrop-blur-md rounded-2xl hover:bg-slate-50/80 in-[.dark]:bg-white/5/20 transition-all group shadow-sm cursor-pointer">
                    <div
                        class="w-6 h-6 rounded-full bg-rose-500/20 flex items-center justify-center group-hover:bg-rose-500/30 transition-colors">
                        <x-icon name="user-plus" class="text-rose-500 w-3.5 h-3.5" />
                    </div>
                    <span class="text-lg font-medium tracking-wide">Account</span>
                    <x-icon name="chevron-down"
                        class="opacity-50 transition-transform group-hover:rotate-180 w-3.5 h-3.5" />
                </button>
                <div class="absolute top-full right-0 hidden group-hover:block transition-all pt-2 min-w-40">
                    <ul
                        class="bg-white/60 in-[.dark]:bg-rose-950/70 rounded-2xl shadow-2xl border border-rose-100 in-[.dark]:border-red-500/20 backdrop-blur-3xl p-2">
                        <li><a href="{{ route('login') }}"
                                class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"
                                wire:navigate><x-icon name="power" class="text-rose-500 w-4.5 h-4.5" />Login</a></li>
                        <li><a href="{{ route('register') }}"
                                class="flex items-center gap-3 p-3 hover:bg-rose-100/50 in-[.dark]:hover:bg-white/5 rounded-xl transition-colors"
                                wire:navigate><x-icon name="user-plus" class="text-indigo-500 w-4.5 h-4.5" />Signup</a></li>
                    </ul>
                </div>
            @endauth
        </div>
    </div>
</nav>

<!-- Floating Dev Server Badge -->
@if(app()->isLocal())
    <div class="fixed top-20 right-6 z-40 group flex items-center justify-center">
        <!-- Tighter Custom Ping Animation -->
        <span class="absolute inset-0 rounded-full bg-amber-400/20 pointer-events-none" style="animation: shadow-pulse 2s cubic-bezier(0, 0, 0.2, 1) infinite"></span>
        <style>
            @keyframes shadow-pulse {
                0% { transform: scale(1); opacity: 1; }
                100% { transform: scale(1.2); opacity: 0; }
            }
        </style>
        <button
            class="relative px-3 py-1.5 bg-amber-500/20 border border-amber-500/30 text-amber-600 in-[.dark]:text-amber-400 text-xs font-black uppercase tracking-widest rounded-full shadow-lg backdrop-blur-md select-none cursor-help hover:bg-amber-500/30 transition-all hover:scale-105">
            DEV Server
        </button>
        <div class="absolute top-full right-0 hidden group-hover:block transition-all pt-3 min-w-64">
            <div
                class="bg-white/95 in-[.dark]:bg-slate-900/95 rounded-2xl shadow-2xl border border-amber-500/20 backdrop-blur-3xl p-4 text-[11px] space-y-3">
                <div
                    class="flex items-center justify-between border-b border-slate-100 in-[.dark]:border-white/10 pb-2">
                    <span class="font-bold text-slate-400 uppercase tracking-tighter">Dev Environment</span>
                    <span
                        class="px-2 py-0.5 bg-emerald-500/10 text-emerald-500 rounded-md font-mono">{{ app()->environment() }}</span>
                </div>
                <div class="space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="text-slate-500">Debug Mode</span>
                        <span class="text-emerald-500">Enabled</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-slate-500">Vite HMR</span>
                        <span class="text-emerald-500">Active</span>
                    </div>
                </div>
                <div class="pt-2 border-t border-slate-100 in-[.dark]:border-white/10 space-y-2">
                    <div>
                        <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter mb-1">SuperAdmin Credentials</div>
                        <div class="bg-slate-50 in-[.dark]:bg-white/5 p-2 rounded-lg font-mono text-[10px] space-y-1 select-all flex flex-col justify-center">
                            <div><span class="text-rose-400">user:</span> {{ config('app.superadmin.email') }}</div>
                            <div><span class="text-rose-400">pass:</span> {{ config('app.superadmin.password') }}</div>
                        </div>
                    </div>
                    <div>
                        <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter mb-1 flex justify-between items-center">
                            <span class="font-black text-rose-500 bg-rose-500/10 px-1 rounded">PhpMyAdmin</span>
                            <a href="{{ config('app.pma.url') }}" target="_blank" class="text-sky-500 hover:text-sky-400 hover:underline normal-case tracking-normal">open &rarr;</a>
                        </div>
                        <div class="bg-slate-50 in-[.dark]:bg-white/5 p-2 rounded-lg font-mono text-[10px] space-y-1 select-all flex flex-col justify-center">
                            <div><span class="text-rose-400">user:</span> {{ config('database.connections.mysql.username') }}</div>
                            <div><span class="text-rose-400">pass:</span> {{ config('database.connections.mysql.password') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
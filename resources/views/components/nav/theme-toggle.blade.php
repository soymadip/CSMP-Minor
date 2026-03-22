<!-- Theme Toggle -->
<button
    id="theme-toggle"
    {{ $attributes->merge(['class' => 'p-2 hover:bg-white/10 rounded-full transition-colors relative h-10 w-10 overflow-hidden']) }}
>
    <input
        type="checkbox"
        id="theme-toggle-input"
        class="theme-toggle-input opacity-0 absolute inset-0 cursor-pointer z-10"
        value="dark"
    />
    <script>
        (function() {
            var toggle = document.getElementById('theme-toggle-input');
            if (toggle) {
                var theme = localStorage.getItem('flux.appearance') || 'dark';
                toggle.checked = (theme === 'dark');
            }
        })();
    </script>
    <x-icon name="sun" class="w-6 h-6 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 transition-transform duration-300 in-[.dark]:scale-0" />
    <x-icon name="moon" class="w-6 h-6 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 transition-transform duration-300 scale-0 in-[.dark]:scale-100" />
</button>

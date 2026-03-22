@props(['title', 'icon' => null, 'align' => 'left'])

@php
    $dropdownClasses = $align === 'right' ? 'right-0' : 'left-0';
@endphp

<div class="relative group">
    <button
        class="flex items-center gap-2 hover:text-rose-500 transition-colors py-2"
    >
        @if($icon)
            <x-icon :name="$icon" class="w-5 h-5" />
        @endif
        {{ $title }}
        <x-icon name="chevron-down" class="w-3.5 h-3.5" />
    </button>
    <div
        class="absolute top-full {{ $dropdownClasses }} hidden group-hover:block transition-all pt-2 z-60"
    >
        <ul
            class="bg-white/60 in-[.dark]:bg-rose-950/70 rounded-2xl shadow-2xl min-w-[200px] border border-rose-100 in-[.dark]:border-red-500/20 backdrop-blur-3xl p-2"
        >
            {{ $slot }}
        </ul>
    </div>
</div>

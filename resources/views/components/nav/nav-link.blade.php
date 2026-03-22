@props(['active' => false, 'icon' => null, 'title' => null])

@php
    $classes = $active
        ? 'text-rose-500 flex items-center gap-2 h-full transition-all duration-300 hover:opacity-80'
        : 'flex items-center gap-2 h-full transition-all duration-300 hover:text-rose-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} wire:navigate>
    @if($icon)
        <x-icon :name="$icon" class="w-5 h-5" />
    @endif
    {{ $title ?? $slot }}
</a>

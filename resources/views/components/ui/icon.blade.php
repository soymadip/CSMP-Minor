@props(['name'])

<span
    {{ $attributes->merge(['class' => 'inline-block mask-no-repeat mask-center mask-contain bg-current w-5 h-5']) }}
    style="
        mask-image: url('{{ asset('img/svg/' . $name . '.svg') }}');
        -webkit-mask-image: url('{{ asset('img/svg/' . $name . '.svg') }}');
    "
></span>

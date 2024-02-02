@props(['active' => false])

@php
    $classes = 'block text-sm text-left px-3 leading-6 py-1 hover:bg-slate-300/30 focus:bg-slate-300/30 ';

    if ($active) $classes .= ' bg-slate-300/40 ';
@endphp

<a {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</a>

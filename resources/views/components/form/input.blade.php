@props([
    'label',
    'name' => strtolower($label),
])

<x-form.reactive-label :$name :$label>
    <input
        data-label-target
        x-on:focus="setLabelStatus(true)"
        x-on:blur="setLabelStatus()"
        {{ $attributes->merge([
            'class' => 'bg-slate-100 px-4 py-2 text-lg rounded-lg w-full outline-none'
        ]) }}
    />
</x-form.reactive-label>

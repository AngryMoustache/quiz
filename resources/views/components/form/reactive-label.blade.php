@props([
    'label',
    'name' => strtolower($label),
    'activated' => false,
])

<div
    {{ $attributes->only('class')->merge(['class' => 'relative z-0 w-full']) }}
    x-data="{
        input: null,
        value: $wire.get('{{ $name }}'),
        activated: @js($activated),
        init () {
            this.input = this.$el.querySelector('[data-label-target]')
            this.setLabelStatus()
        },
        setLabelStatus (activated = null) {
            this.value = this.input.value
            this.activated = (activated === null) ? !! this.input.value : activated
        },
        getValue () {
            return this.value
        },
        setValue (value, defer = true) {
            this.input.value = value
            this.setLabelStatus()
            $wire.set('{{ $name }}', value, defer)
        },
    }"
>
    @if ($label)
        <label
            for="{{ $name }}"
            :class="{ '!-top-4 text-xs opacity-100' : activated }"
            {{ $attributes->only('class')->merge([
                'class' => "absolute top-0.5 pointer-events-none transition-all px-4 py-2 opacity-50",
            ]) }}
        >
            {{ $label }}
        </label>
    @endif

    {{ $slot }}

    @error ($name)
        <span class="inline-block pl-2 pt-2 text-red-500">{{ $message }}</span>
    @enderror
</div>

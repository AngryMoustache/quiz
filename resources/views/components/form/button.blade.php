<button {{ $attributes->except('label')->merge([
    'class' => 'w-full bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-xl',
]) }}>
    {{ $label }}
</button>

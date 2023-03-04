<div class="w-full h-screen overflow-hidden flex justify-center items-center">
    <x-card class="w-1/3 flex flex-col gap-8">
        <h1 class="font-bold text-3xl px-1">
            Hello there
        </h1>

        <x-form.input
            wire:model.defer="code"
            label="Code"
        />

        <x-form.button
            wire:click.prevent="submit"
            label="Connect"
        />
    </x-card>
</div>

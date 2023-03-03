<div class="w-full h-screen overflow-hidden flex justify-center items-center">
    <x-card class="w-1/3 flex flex-col gap-8">
        {{ $game->participants->count() }} people waiting

        <x-form.input
            wire:model.defer="name"
            label="Your displayed name"
            name="name"
        />
    </x-card>
</div>

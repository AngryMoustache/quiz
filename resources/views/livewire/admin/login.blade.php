<div class="w-full h-screen overflow-hidden flex">
    <div class="w-1/2 flex flex-col gap-6 justify-center items-center">
        <h1 class="font-bold text-5xl">Quiz admin</h1>
        <p class="text-lg">Create or edit quizzes for your fellow humans</p>
    </div>

    <x-card class="rounded-none w-1/2 flex flex-col gap-8">
        <div x-data="{
            type: 'login',
            switchTab (type) {
                this.type = type

                $wire.resetErrorBag()
            },
            submit () {
                if (this.type === 'login') {
                    $wire.login()
                } else {
                    $wire.register()
                }
            }
        }">
            <ul>
                <li x-on:click="switchTab('login')" :class="{ 'text-blue-500': type === 'login' }">Log in</li>
                <li x-on:click="switchTab('register')" :class="{ 'text-blue-500': type === 'register' }">Register</li>
            </ul>

            <form x-on:submit.prevent="submit">
                <x-form.input
                    label="Username"
                    wire:model.defer="username"
                />

                <x-form.input
                    type="password"
                    label="Password"
                    wire:model.defer="password"
                />

                <div style="display: none" x-show="type === 'register'">
                    <x-form.input
                        type="password"
                        label="Confirm password"
                        wire:model.defer="password_confirmation"
                    />
                </div>

                <x-form.button label="Confirm" />
            </form>
        </div>
    </x-card>
</div>

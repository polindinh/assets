<div>
    <x-jet-dialog-modal wire:model="newUserModal">
        <x-slot name="title">
            {{ __('Create New User') }}
        </x-slot>

        <x-slot name="content">
            <form submit.prevent="createNewHardware">
                <div class="block">
                    <x-jet-label value="{{ __('Name') }}" />
                    <x-jet-input class="block w-full" type="text" wire:model="name" />

                    @error('name')
                        <div class="text-sm text-red-500" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="block">
                    <x-jet-label value="{{ __('Email') }}" />
                    <x-jet-input class="block w-full" type="email" wire:model="email" />

                    @error('email')
                        <div class="text-sm text-red-500" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="block">
                    <x-jet-label value="{{ __('Password') }}" />
                    <x-jet-input class="block w-full" type="password" wire:model="password" />

                    @error('password')
                        <div class="text-sm text-red-500" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="block">
                    <x-jet-label value="{{ __('Confirm Password') }}" />
                    <x-jet-input class="block w-full" type="password" wire:model="password_confirmation" />

                    @error('password_confirmation')
                        <div class="text-sm text-red-500" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </form>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="createNewUser()"  style="background:rgb(43, 128, 0); color:white;">
                {{ __('Create') }}
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>

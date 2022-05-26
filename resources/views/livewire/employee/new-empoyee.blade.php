<div>
    <x-jet-dialog-modal wire:model="showModal">
        <x-slot name="title">
            {{ __('Create Employee') }}
        </x-slot>

        <x-slot name="content">
            <form submit.prevent="createNewHardware">

                <div class="block">
                    <x-jet-label value="{{ __('First Name') }}" />
                    <x-jet-input class="block w-full" type="text" wire:model="first_name" />
                    @error('first_name')
                        <div class="text-sm text-red-500" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="block">
                    <x-jet-label value="{{ __('Last Name') }}" />
                    <x-jet-input class="block w-full" type="text" wire:model="last_name" />
                    @error('last_name')
                        <div class="text-sm text-red-500" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="block">
                    <x-jet-label value="{{ __('Email') }}" />
                    <x-jet-input class="block w-full" type="text" wire:model="email" />

                    @error('email')
                        <div class="text-sm text-red-500" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

            </form>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="createNewEmployee()" style="background:rgb(43, 128, 0); color:white;">
                {{ __('Create') }}
            </x-jet-secondary-button>
            {{-- <x-jet-button wire:click="createNewHardware" class="ml-2" style="background:rgb(43, 128, 0): color:white;">
                {{ __('Create') }}
            </x-jet-button> --}}
        </x-slot>
    </x-jet-dialog-modal>
</div>

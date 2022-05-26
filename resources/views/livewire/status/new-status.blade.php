<div>

        <x-jet-dialog-modal wire:model="newStatusModal">
            <x-slot name="title">
                {{ __('Create Status') }}
            </x-slot>

            <x-slot name="content">
                <form submit.prevent="createNew">
                    <div class="block">
                        <x-jet-label value="{{ __('Name') }}" />
                        <x-jet-input class="block w-full" type="text" wire:model="name" />
                        @error('name')
                            <div class="text-sm text-red-500" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </form>
            </x-slot>
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="createNew()" style="background:rgb(43, 128, 0); color:white;">
                    {{ __('Create') }}
                </x-jet-secondary-button>
                {{-- <x-jet-button wire:click="createNewHardware" class="ml-2" style="background:rgb(43, 128, 0); color:white;">
                    {{ __('Create') }}
                </x-jet-button> --}}
            </x-slot>
        </x-jet-dialog-modal>

</div>

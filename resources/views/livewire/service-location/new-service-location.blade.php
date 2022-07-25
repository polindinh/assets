<div>
    <div>
        <x-jet-button class="mr-4"
    wire:click="toggleModal()"
    >
        {{ __('Create Service Location') }}</x-jet-button>
    </div>

    <div>
        <x-jet-dialog-modal wire:model="newServiceLocationModal">
            <x-slot name="title">
                {{ __('Create Service Location') }}
            </x-slot>

            <x-slot name="content">
                <form submit.prevent="createServiceLocation">
                    <div class="block">
                        <x-jet-label value="{{ __('Name') }}" />
                        <x-jet-input class="block w-full" type="text" wire:model="name" />
                        @error('name')
                            <div class="text-sm text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="block">
                        <x-jet-label value="{{ __('Address') }}" />
                        <x-jet-input class="block w-full" type="text" wire:model="address" />
                    @error('address')
                        <div class="text-sm text-red-600">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                </form>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="toggleModal()">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <x-jet-button wire:click="createServiceLocation" class="ml-2">
                    {{ __('Create') }}
                </x-jet-button>
            </x-slot>

        </x-jet-dialog-modal>
    </div>

</div>

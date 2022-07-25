<div>
    <x-jet-dialog-modal wire:model="newModelModal">
        <x-slot name="title">
            @if($hid!==null)
            {{ __('Update') }}
            @else
            {{ __('Create') }}
            @endif {{ __(' Model') }}
        </x-slot>

        <x-slot name="content">
            <form submit.prevent="createNewHardware">
                <div class="block">
                    <x-jet-label value="{{ __('Type') }}" />
                    <x-jet-input class="block w-full" type="text" wire:model="type" />
                    @error('type')
                    <div class="text-sm text-red-500" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="block">
                    <x-jet-label value="{{ __('Vendor') }}" />
                    <x-jet-input class="block w-full" type="text" wire:model="vendor" />

                    @error('vendor')
                    <div class="text-sm text-red-500" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="block">
                    <x-jet-label value="{{ __('Model') }}" />
                    <x-jet-input class="block w-full" type="text" wire:model="model" />

                    @error('model')
                    <div class="text-sm text-red-500" role="alert">
                        {{ $message }}
                    </div>
                    @enderror

                </div>
                <div class="block">
                    <x-jet-label value="{{ __('Size') }}" />
                    <x-jet-input class="block w-full" type="text" wire:model="size" />

                    @error('size')
                    <div class="text-sm text-red-500" role="alert">
                        {{ $message }}
                    </div>
                    @enderror

                </div>
            </form>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="createNewHardware()">
                @if($hid!==null)
                {{ __('Update') }}
                @else
                {{ __('Create') }}
                @endif
            </x-jet-secondary-button>

        </x-slot>
    </x-jet-dialog-modal>
</div>

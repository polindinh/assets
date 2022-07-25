<div>

    <x-jet-dialog-modal wire:model="newStatusModal">
        <x-slot name="title">
            @if(isset($selected)) {{ __('Update') }} @else {{ __('Create') }} @endif {{ __(' Status') }}
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
            <x-jet-secondary-button wire:click="createNew()">
                @if(isset($selected)) {{ __('Update') }} @else {{ __('Create') }} @endif
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>

</div>

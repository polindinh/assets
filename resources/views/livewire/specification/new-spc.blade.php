<div>
    <div>

        <x-jet-dialog-modal wire:model="newSpecModal">
            <x-slot name="title">
                {{ __('Create Specification') }}
            </x-slot>

            <x-slot name="content">
                <form submit.prevent="createNewHardware">
                    <div class="block">
                        <x-jet-label value="{{ __('CPU') }}" />
                        <x-jet-input class="block w-full" type="text" wire:model="cpu" />
                        @error('cpu')
                            <div class="text-sm text-red-500" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="block">
                        <x-jet-label value="{{ __('Memory') }}" />
                        <x-jet-input class="block w-full" type="number" wire:model="memory" />

                        @error('memory')
                            <div class="text-sm text-red-500" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="block">
                        <x-jet-label value="{{ __('Storage') }}" />
                        <x-jet-input class="block w-full" type="number" wire:model="storage" />

                        @error('storage')
                            <div class="text-sm text-red-500" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="block">
                        <x-jet-label value="{{ __('GPU') }}" />
                        <x-jet-input class="block w-full" type="text" wire:model="gpu" />

                        @error('gpu')
                            <div class="text-sm text-red-500" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="flex justify-space-around">
                        <div class="block mr-4">
                            <x-jet-label value="{{ __('Is SSD') }}" />
                            <x-jet-checkbox wire:model="is_ssd">
                                {{ __('Yes') }}
                            </x-jet-checkbox>
                            @error('is_ssd')
                                <div class="text-sm text-red-500" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="block mr-4">
                            <x-jet-label value="{{ __('Wifi Enabled') }}" />
                            <x-jet-checkbox wire:model="wifi_enabled">
                                {{ __('Yes') }}
                            </x-jet-checkbox>
                            @error('wifi_enabled')
                                <div class="text-sm text-red-500" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="block mr-4">
                            <x-jet-label value="{{ __('Wwan Enabled') }}" />
                            <x-jet-checkbox wire:model="wwan_enabled">
                                {{ __('Yes') }}
                            </x-jet-checkbox>
                            @error('wwan_enabled')
                                <div class="text-sm text-red-500" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </form>
            </x-slot>
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="createNewSpec()" style="background:rgb(43, 128, 0); color:white;">
                    {{ __('Create') }}
                </x-jet-secondary-button>

            </x-slot>
        </x-jet-dialog-modal>
    </div>

</div>

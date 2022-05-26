<div>
    <form wire:submit.prevent="createNewAsset">
        <div>
            @if (session()->has('message'))
                <div class="bg-green-700 p-4 text-white">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <div class="block">
            <x-jet-label value="{{ __('Asset Id') }}" />
            <x-jet-input class="block w-full" type="text" wire:model="assetId" />

            @error('assetId')
                <div class="text-sm text-red-500" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="block">
            <x-jet-label value="{{ __('Model') }}" />
            @livewire('hardware.hardware-dropdown',[
                'model' => $hardware,
            ])

            @error('hardware')
                <div class="text-sm text-red-500" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="block">
            <x-jet-label value="{{ __('Specifications') }}" />
            @livewire('specification.spec-dropdown',[
                'specification' => $specification,
            ])

            @error('specification')
                <div class="text-sm text-red-500" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="block">
            <x-jet-label value="{{ __('Operating System') }}" />
            <x-jet-input class="block w-full" type="text" wire:model="operating_system" />

            @error('operating_system')
                <div class="text-sm text-red-500" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="block">
            <x-jet-label value="{{ __('Notes') }}" />
            <textarea class="block w-full rounded-md" type="text" wire:model="notes" ></textarea>

            @error('operating_system')
                <div class="text-sm text-red-500" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="block">
            <x-jet-label value="{{ __('Purchase Date') }}" />
            <x-jet-input class="block w-full" type="date" wire:model="purchase_date" />

            @error('purchase_date')
                <div class="text-sm text-red-500" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="block">
            <x-jet-label value="{{ __('Status') }}" />
            @livewire('status.status-dropdown',[
                'selectedStatus' => $status,
            ])

            @error('status')
                <div class="text-sm text-red-500" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="block mt-5">
            @if ($asset)
                <x-jet-button wire:click="createNewAsset" wire:loading.attr="disabled" style="background:rgb(43, 128, 0)">
                    {{ __('Update') }}
                </x-jet-button>
            @else
                <x-jet-button wire:click="createNewAsset" style="background:rgb(43, 128, 0)">{{ __('Save') }}</x-jet-button>
            @endif
        </div>
    </form>
</div>

<div>
    <div>
        @if (session()->has('message'))
            <div class="bg-green-500 p-4 text-white m-2 rounded-md">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="container mt-6">
        <div class="flex justify-between">
            <div class="p-4">
                <h1>Transactions</h1>
            </div>

            <div class="block">
                <x-jet-label value="{{ __('Search') }}" />
                <x-jet-input wire:change="searchTransaction" class="block w-full" type="text" wire:model="search_transaction" />
            </div>

            <div class="p-4">
                <x-jet-button wire:click="$toggle('showHistoryModal')" wire:loading.attr="disabled">
                    Add New
                </x-jet-button>
            </div>
        </div>

        <x-jet-dialog-modal wire:model="showHistoryModal">
            <x-slot name="title">
                {{ __('Add New Transaction') }}
            </x-slot>

            <x-slot name="content">
                <div>
                    {{ __('Enter all information') }}
                </div>

                <div class="mt-4">
                    <x-jet-label value="{{ __('Employee') }}" />
                    @livewire('employee.empoyee-dropdown')
                    @error('employee')
                        <div class="text-sm text-red-500" role="alert">
                            {{ $message }}
                        </div>

                    @enderror
                </div>

                <div class="mt-4">
                    <x-jet-label value="{{ __('Location') }}" />
                    @livewire('service-location.service-location-dropdown')
                    @error('location')
                        <div class="text-sm text-red-500" role="alert">
                            {{ $message }}
                        </div>

                    @enderror
                </div>

                <div class="mt-4">
                    <x-jet-label value="{{ __('Type') }}" />
                    <x-jet-input class="block w-full" type="text" wire:model="type" />
                    @error('type')
                        <div class="text-sm text-red-500" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mt-4">
                    <x-jet-label value="{{ __('Notes') }}" />
                    <x-jet-input class="block w-full" type="text" wire:model="notes" />
                    @error('notes')
                        <div class="text-sm text-red-500" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mt-4">
                    <x-jet-label value="{{ __('Ticket') }}" />
                    <x-jet-input class="block w-full" type="text" wire:model="ticket" />
                    @error('ticket')
                        <div class="text-sm text-red-500" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mt-4">
                    <x-jet-label value="{{ __('Mouse') }}" />
                    <x-jet-input class="block w-full" type="number" wire:model="mouse" />
                    @error('mouse')
                        <div class="text-sm text-red-500" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mt-4">
                    <x-jet-label value="{{ __('Keyboard') }}" />
                    <x-jet-input class="block w-full" type="number" wire:model="keyboard" />
                    @error('keyboard')
                        <div class="text-sm text-red-500" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mt-4">
                    <x-jet-label value="{{ __('Power Supply') }}" />
                    <x-jet-input class="block w-full" type="number" wire:model="power_supply" />
                    @error('power_supply')
                        <div class="text-sm text-red-500" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mt-4">
                    <x-jet-label value="{{ __('Dock') }}" />
                    <x-jet-input class="block w-full" type="number" wire:model="dock" />
                    @error('dock')
                        <div class="text-sm text-red-500" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mt-4">
                    <x-jet-label value="{{ __('Dock power supply') }}" />
                    <x-jet-input class="block w-full" type="number" wire:model="dock_power_supply" />
                    @error('dock_power_supply')
                        <div class="text-sm text-red-500" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="mt-4">
                    <x-jet-label value="{{ __('Monitor') }}" />
                    <x-jet-input class="block w-full" type="number" wire:model="monitor" />
                    @error('monitor')
                        <div class="text-sm text-red-500" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>



            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$set('showHistoryModal', false)" wire:loading.attr="disabled">
                    {{ __('Close') }}
                </x-jet-secondary-button>

                <x-jet-button class="ml-8" wire:click="createNewTransaction" wire:loading.attr="disabled">
                    {{ __('Save') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>

        <div class="flex flex-col md:grid grid-cols-12 text-gray-50">
            @foreach ($transactions as $transaction)
                @livewire('asset.single-transaction', ['transaction' => $transaction])
            @endforeach
        </div>

    </div>
</div>

<div class="flex md:contents">



    <x-jet-dialog-modal wire:model="confirmDelete">
        <x-slot name="title">
            {{_('Delete Transaction')}}
        </x-slot>
        <x-slot name="content">
            <p class="text-sm text-gray-600">
                Are you sure you want to delete this Transaction?
            </p>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmDelete')">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="deleteTransaction()" class="ml-2">
                {{ __('Delete') }}
            </x-jet-danger-button>
        </x-slot>


    </x-jet-dialog-modal>

    <div class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
        <div class="h-full w-6 flex items-center justify-center">
            <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
        </div>
        <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-gray-300 shadow text-center">
            <i class="fas fa-exclamation-circle text-gray-400"></i>
        </div>
    </div>
    <div class="bg-white col-start-4 col-end-12 p-4 rounded-xl my-4 mr-auto shadow-md w-full">
        <div class="flex justify-end">
            <x-jet-danger-button class="bg-red-500 mt-2" wire:click="$toggle('confirmDelete')" wire:loading.attr="disabled">
                Delete
            </x-jet-danger-button>
        </div>
        <h3 class="font-semibold text-lg mb-1 text-gray-400">{{$transaction->created_at->format('d-m-Y h:i A')}}</h3>
        <p class="leading-tight text-justify text-black">{{$transaction->employee->FullName}}</p>

        <p class="leading-tight text-justify text-gray-400"><span class="font-bold">Notes: </span>{{$transaction->notes}}</p>
        <p class="leading-tight text-justify text-gray-500"><span class="font-bold">Ticket: </span>{{$transaction->ticket}}</p>
        <p class="leading-tight text-justify text-gray-500"><span class="font-bold">Mouse: </span>{{$transaction->peripherals->mouse}}</p>
        <p class="leading-tight text-justify text-gray-500"><span class="font-bold">Keyboard: </span>{{$transaction->peripherals->keyboard}}</p>
        <p class="leading-tight text-justify text-gray-500"><span class="font-bold">Power Supply: </span>{{$transaction->peripherals->power_supply}}</p>
        <p class="leading-tight text-justify text-gray-500"><span class="font-bold">Dock: </span>{{$transaction->peripherals->dock}}</p>
        <p class="leading-tight text-justify text-gray-500"><span class="font-bold">Dock Power Supply: </span>{{$transaction->peripherals->dock_power_supply}}</p>
        <p class="leading-tight text-justify text-gray-500"><span class="font-bold">Monitor: </span>{{$transaction->peripherals->monitor}}</p>

    </div>
</div>

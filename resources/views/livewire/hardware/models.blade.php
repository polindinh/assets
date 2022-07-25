<div class="p-4">
    <span wire:click="toggleModal()" class="cursor-pointer ml-6 bg-teal-400 text-white p-2 rounded-md">
        {{ __('new') }}
    </span>

    <div class="p-4">
        <livewire:hardware-table />
    </div>

    @livewire('hardware.new-hardware')

    <x-jet-dialog-modal wire:model="deleteModal">
        <x-slot name="title">
            Delete Confirmation
        </x-slot>

        <x-slot name="content">
            <div class="block">
                Are you sure you want to delete this model?
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="toggleDeleteModal()">
                Cancel
            </x-jet-secondary-button>
            <button wire:click="deleteSpecification()" class="bg-red-500 rounded-md p-4 ml-2 text-white">
                Confirm
            </button>

        </x-slot>
    </x-jet-dialog-modal>
</div>

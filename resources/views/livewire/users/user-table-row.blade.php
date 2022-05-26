
    <tr>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            {{ $user->id }}
        </td>

        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            {{ $user->name }}
        </td>

        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            {{ $user->email }}
        </td>

        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <x-jet-danger-button class="bg-red-500" wire:click="toggleDeleteModal({{$user->id}})" wire:loading.attr="disabled">
                Delete
            </x-jet-danger-button>


            <x-jet-dialog-modal wire:model="confirmDelete">
                <x-slot name="title">
                    {{_('Delete User')}}
                </x-slot>
                <x-slot name="content">
                    <p class="text-sm text-gray-600">
                        Are you sure you want to delete this user?
                    </p>
                </x-slot>
                <x-slot name="footer">
                    <x-jet-secondary-button wire:click="toggleDeleteModal()">
                        {{ __('Cancel') }}
                    </x-jet-secondary-button>
                    <x-jet-danger-button wire:click="deleteUser({{ $user->id }})" class="ml-2">
                        {{ __('Delete') }}
                    </x-jet-danger-button>
                </x-slot>


            </x-jet-dialog-modal>



        </td>
    </tr>

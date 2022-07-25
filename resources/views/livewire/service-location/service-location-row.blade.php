<tr>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        {{ $serviceLocation->id }}
    </td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <p class="text-gray-900 whitespace-no-wrap">{{$serviceLocation->name}}</p>

    </td>

    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <p class="text-gray-900 whitespace-no-wrap">{{$serviceLocation->address}}</p>
    </td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <p class="text-gray-900 whitespace-no-wrap">{{$serviceLocation->created_at->diffForHumans()}}</p>
    </td>

    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <div>
            <x-jet-secondary-button wire:click="editServiceLocation({{ $serviceLocation->id }})" wire:loading.attr="disabled">
                Edit
            </x-jet-secondary-button>
                <x-jet-dialog-modal wire:model="updateServiceModal">
                    <x-slot name="title">
                        {{ __('Create Service Location') }}
                    </x-slot>

                    <x-slot name="content">
                        <form submit.prevent="updateServiceLocation">
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

                        <x-jet-button wire:click="updateServiceLocation" class="ml-2 bg-blue-500">
                            {{ __('Update') }}
                        </x-jet-button>
                    </x-slot>

                </x-jet-dialog-modal>

            <x-jet-danger-button class="bg-red-500" wire:click="toggleDeleteModal()" wire:loading.attr="disabled">
                Delete
            </x-jet-danger-button>

            <x-jet-dialog-modal wire:model="confirmDeleteServiceLocation">
                <x-slot name="title">
                    {{_('Delete Service Location')}}
                </x-slot>
                <x-slot name="content">
                    <p class="text-sm text-gray-600">
                        Are you sure you want to delete this service location?
                    </p>
                </x-slot>
                <x-slot name="footer">
                    <x-jet-secondary-button wire:click="toggleDeleteModal()">
                        {{ __('Cancel') }}
                    </x-jet-secondary-button>
                    <x-jet-danger-button wire:click="deleteServiceLocation({{ $serviceLocation->id }})" class="ml-2">
                        {{ __('Delete') }}
                    </x-jet-danger-button>
                </x-slot>


            </x-jet-dialog-modal>


        </div>

    </td>


</tr>



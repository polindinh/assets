
    <tr>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <a href="{{ route('asstes.show',$asset->id)}}" class="bg-brown-500 text-blue-500 hover:text-blue-700">
                {{ $asset->asset_id }}
            </a>
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            {{ $asset->hardware->type }}
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            {{ $asset->pc_specification->cpu }}
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            {{ $asset->operating_system }}
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            {{ $asset->notes }}
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            {{ $asset->created_at->diffForHumans() }}
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            {{ $asset->creator->name }}
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            {{ $asset->updator->name  ??"-" }}
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <a href="{{ route('asstes.show',$asset->id)}}" class="bg-brown-500 text-blue-500 hover:text-blue-700">
                view
            </a>
            <a  class="bg-brown-500 text-blue-500 hover:text-blue-700 ml-6" href="{{route('asstes.edit',$asset->id)}}">
                Edit
            </a>
            <x-jet-danger-button class="bg-red-500 mt-2" wire:click="$toggle('confirmDeleteAsset')" wire:loading.attr="disabled">
                Delete
            </x-jet-danger-button>

            <x-jet-dialog-modal wire:model="confirmDeleteAsset">
                <x-slot name="title">
                    {{_('Delete Asset')}}
                </x-slot>
                <x-slot name="content">
                    <p class="text-sm text-gray-600">
                        Are you sure you want to delete this Asset?
                    </p>
                </x-slot>
                <x-slot name="footer">
                    <x-jet-secondary-button wire:click="$toggle('confirmDeleteAsset')">
                        {{ __('Cancel') }}
                    </x-jet-secondary-button>
                    <x-jet-danger-button wire:click="deleteAsset()" class="ml-2">
                        {{ __('Delete') }}
                    </x-jet-danger-button>
                </x-slot>


            </x-jet-dialog-modal>



        </td>
    </tr>


<x-app-layout>

    <div class="flex flex-col w-full mx-auto p-4">
        <div class="flex justify-between mb-4">


            <a target="_blank" href="{{route('asstes.download')}}" class="mr-4 p-2 rounded-md bg-blue-500 text-white">
                {{ __('Export') }}
            </a>
            <a href="{{route('asstes.new')}}" class="mr-4 p-2 rounded-md bg-green-500 text-white">
                {{ __('Create New') }}
            </a>
        </div>

        @livewire('asset.asset-table')


    </div>
</x-app-layout>

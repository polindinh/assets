<x-app-layout>

    <div class="flex flex-col w-full mx-auto p-4">
        <div class="flex justify-between mb-4">


            <a href="{{route('asstes.new')}}" class="mr-4 p-2 rounded-md bg-green-500 text-white" style="background:rgb(43, 128, 0)">
                {{ __('Create New') }}
            </a>
        </div>

        @livewire('asset.asset-table')


    </div>
</x-app-layout>

<x-app-layout>
{{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="p-10 grid grid-flow-col auto-cols-max gap-x-4 justify-center">
        <!--Card 1-->
        <div class="max-w-sm rounded-md overflow-hidden shadow-lg">
            <div class="px-6 py-4">
                <div class="font-bold  mb-2 text-xl">Assets</div>
                <p class="text-gray-700 text-xl text-base">{{ $assets }}</p>
            </div>
        </div>
        <!--Card 1-->
        <div class="max-w-sm rounded-md overflow-hidden shadow-lg">
            <div class="px-6 py-4">
                <div class="font-bold  mb-2 text-xl">Service Locations</div>
                <p class="text-gray-700 text-xl text-base">
                    {{ $locations }}
                </p>
            </div>
        </div>
        <!--Card 1-->
        <div class="max-w-sm rounded-md overflow-hidden shadow-lg">
            <div class="px-6 py-4">
                <div class="font-bold  mb-2 text-xl">Users</div>
                <p class="text-gray-700 text-xl text-base">
                    {{ $users }}
                </p>
            </div>
        </div>
        <div class="max-w-sm rounded-md overflow-hidden shadow-lg">
            <div class="px-6 py-4">
                <div class="font-bold  mb-2 text-xl">Employees</div>
                <p class="text-gray-700 text-xl text-base">
                    {{ $employees }}
                </p>
            </div>
        </div>

    </div>


</x-app-layout>

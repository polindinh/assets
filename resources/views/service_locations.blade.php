<x-app-layout>


    <div class="flex flex-col w-full mx-auto px-6 py-8">
        <div class="flex justify-end mb-10">
            @livewire('service-location.new-service-location')
        </div>

        @livewire('service-location.service-location-table')

    </div>
</x-app-layout>

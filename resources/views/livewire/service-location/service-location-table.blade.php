<div class="py-8">
    <div>
        <h2 class="text-2xl font-semibold leading-tight">All Service Locations</h2>
    </div>
    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
        <div
          class="inline-block w-full shadow-md rounded-lg overflow-hidden"
        >
          <table class="w-full leading-normal">
            <thead>
              <tr>
                <th
                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                >
                  Id
                </th>
                <th
                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                >
                  Name
                </th>
                <th
                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                >
                  Address
                </th>
                <th
                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                >
                  Created At
                </th>
                <th
                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                >
                  Actions
                </th>

              </tr>
            </thead>
            <tbody>
                @foreach ($serviceLocations as $serviceLocation)
                    @livewire('service-location.service-location-row', ['serviceLocation' => $serviceLocation])
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
      {{ $serviceLocations->links() }}
    </div>
</div>

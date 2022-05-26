<div >
    <div class="flex justify-between ">
        <div class="block">
            <h2 class="text-2xl font-semibold leading-tight">All Assets</h2>
        </div>
        <div class="block">
            <x-jet-label value="{{ __('Search') }}" />
            <x-jet-input class="block w-full"  type="text" wire:model="search" />
        </div>
    </div>

    <div>
        @if (session()->has('message'))
            <div class="bg-green-500 p-4 text-white m-2 rounded-md">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
        <div
          class="inline-block w-full shadow-md rounded-lg overflow-hidden"
        >
          <table class="w-full leading-normal">
            <thead>
              <tr>
                <th
                  style="background:rgb(75, 40, 109); color:white !important;" class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                >
                  ID
                </th>
                <th
                  style="background:rgb(75, 40, 109); color:white !important;" class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                >
                  Model
                </th>
                <th style="background:rgb(75, 40, 109); color:white !important;" class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                >
                  Specification
                </th>
                <th style="background:rgb(75, 40, 109); color:white !important;" class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                >
                  Operating System
                </th>
                <th
                  style="background:rgb(75, 40, 109); color:white !important;" class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                >
                  Notes
                </th>
                <th style="background:rgb(75, 40, 109); color:white !important;" class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                >
                  Created at
                </th>
                <th style="background:rgb(75, 40, 109); color:white !important;" class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                >
                  Creator
                </th>
                <th style="background:rgb(75, 40, 109); color:white !important;" class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                >
                  Updated By
                </th>
                <th style="background:rgb(75, 40, 109); color:white !important;" class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  Actions
                </th>

              </tr>
            </thead>
            <tbody>
                @foreach ($assets as $asset)
                    @livewire('asset.asset-table-row', ['asset' => $asset], key('asset_id_'.$asset->id))
                @endforeach
            </tbody>
          </table>
        </div>
        {{ $assets->links() }}
      </div>

    </div>
</div>

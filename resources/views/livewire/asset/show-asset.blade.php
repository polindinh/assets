<div>
   <div class="p-4">
        <div class="flex justify-between">
            <div class="block">
                <x-jet-label value="{{ __('Asset ID') }}" />
                <h1>{{$asset->asset_id}}</h1>

                <x-jet-label value="{{ __('Status') }}" />
                <h1>{{$asset->status->name}}</h1>
            </div>
            <div class="block">
                <x-jet-label value="{{ __('Hardware Information') }}" />
                <h1 class="p-2"><span class="font-bold">Type:</span> {{$asset->hardware->type}}</h1>
                <h1 class="p-2"><span class="font-bold">Vendor:</span> {{$asset->hardware->vendor}}</h1>
                <h1 class="p-2"><span class="font-bold">Model:</span> {{$asset->hardware->model}}</h1>
                <h1 class="p-2"><span class="font-bold">Size:</span> {{$asset->hardware->size}}</h1>

            </div>

            <div class="block">
                <x-jet-label value="{{ __('Specification') }}" />

                <h1 class="p-2"><span class="font-bold">cpu:</span> {{$asset->pc_specification->cpu}}</h1>
                <h1 class="p-2"><span class="font-bold">gpu:</span> {{$asset->pc_specification->gpu}}</h1>
                <h1 class="p-2"><span class="font-bold">memory:</span> {{$asset->pc_specification->memory}}</h1>
                <h1 class="p-2"><span class="font-bold">storage:</span> {{$asset->pc_specification->storage}}</h1>
                <h1 class="p-2"><span class="font-bold">is ssd:</span> {{$asset->pc_specification->is_ssd===0?"False":"True"}}</h1>
                <h1 class="p-2"><span class="font-bold">wifi enabled:</span> {{$asset->pc_specification->wifi_enabled===0?"False":"True"}}</h1>
                <h1 class="p-2"><span class="font-bold">wwan enabled:</span> {{$asset->pc_specification->wwan_enabled===0?"False":"True"}}</h1>


            </div>
        </div>

        <div class="flex justify-between mt-4">

            <div class="block">
                <x-jet-label value="{{ __('Operating System') }}" />
                <h1 class="p-2"><span class="font-bold">{{$asset->operating_system}}</span> </h1>
            </div>

            <div class="block">
                <x-jet-label value="{{ __('Notes') }}" />
                <h1 class="p-2"><span class="font-bold"> {{$asset->notes}}</span></h1>
            </div>

            <div class="block">
                <x-jet-label value="{{ __('Purhase Date') }}" />
                <h1 class="p-2"><span class="font-bold"> {{$asset->purchase_date}}</span></h1>
            </div>


        </div>
   </div>

    {{-- show transactions --}}
    @livewire('asset.show-transactions', ['asset' => $asset])
</div>

<div>
    <div class="flex justify-between">
        <div class="w-full">
            <select wire:change="setSpecification" wire:model="specification" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option value="">{{ __('Select Model') }}</option>
                @foreach ($models as $model)
                    <option  value="{{ $model->id }}">{{ $model->cpu }}</option>
                @endforeach
            </Select>
        </div>
        <span wire:click="toggleModal()" class="cursor-pointer ml-6 bg-teal-400 text-white p-2 rounded-md">
            {{ __('new') }}
        </span>
        @livewire('specification.new-spc')
    </div>

</div>

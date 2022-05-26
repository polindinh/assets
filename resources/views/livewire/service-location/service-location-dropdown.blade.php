<div class="flex justify-between">
    <div class="w-full">
        <select wire:model="serviceLocation" wire:change="setLocation()" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            <option value="">{{ __('Select Service Location') }}</option>
            @foreach ($locations as $employee)
                <option wire:key="{{$employee->id}}" value="{{ $employee->id }}">{{ $employee->name }}</option>
            @endforeach
        </Select>
    </div>
</div>

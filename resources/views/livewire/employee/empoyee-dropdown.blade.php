<div class="flex justify-between">
    <div class="w-full">
        <select wire:model="employee" wire:change="setEmployee()" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            <option value="">{{ __('Select Employee') }}</option>
            @foreach ($employees as $employee)
                <option wire:key="{{$employee->id}}" value="{{ $employee->id }}">{{ $employee->first_name." ".$employee->last_name }}</option>
            @endforeach
        </Select>
    </div>
    <span wire:click="toggleNewModal()" class="cursor-pointer ml-6 bg-teal-400 text-white p-2 rounded-md">
        {{ __('new') }}
    </span>
    @livewire('employee.new-empoyee')
</div>

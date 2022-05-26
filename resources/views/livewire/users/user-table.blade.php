<div class="p-4">
    <div class="flex justify-between ">
        <div class="block flex justify-between">
            <h2 class="text-2xl font-semibold leading-tight">All Users</h2>

            <x-jet-button wire:click="createUserModal()" class="ml-4" style="background:rgb(43, 128, 0); padding-top:0;padding-bottom:0;height:40px;">
                Create User
            </x-jet-button>

        </div>
        <div class="block">
            <x-jet-label value="{{ __('Search') }}" />
            <x-jet-input class="block w-full"  type="text" wire:model="search" />
        </div>
    </div>

    @livewire('users.new-user')

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
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                    >
                    ID
                    </th>
                    <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                    >
                    Name
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                    >
                    Email
                    </th>


                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Actions
                    </th>

                </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        @livewire('users.user-table-row', ['user' => $user], key('user__'.$user->id))
                    @endforeach
                </tbody>
            </table>
            </div>
            {{ $users->links() }}
        </div>

    </div>
</div>

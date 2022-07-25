<aside>
    <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded dark:bg-gray-800">
        <ul class="space-y-2">
            @livewire('menu.menuitem', ['name' => 'Dashboard', 'url' => route('dashboard')])

            @livewire('menu.menuitem', ['name' => 'Assets', 'url' => route('asstes.index')])

            @livewire('menu.menuitem', ['name' => 'Models', 'url' => route('model.index')])
            @livewire('menu.menuitem', ['name' => 'Status', 'url' => route('status.index')])

            @livewire('menu.menuitem', ['name' => 'Specification', 'url' => route('specification.index')])
            @livewire('menu.menuitem', ['name' => 'Service locations', 'url' => route('service_locations.index')])

            @auth
            @if (auth()->user()->isAdmin())
            @livewire('menu.menuitem', ['name' => 'Users', 'url' => route('users.index')])

            @endif
            @endauth
        </ul>
    </div>
</aside>

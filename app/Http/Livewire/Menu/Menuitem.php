<?php

namespace App\Http\Livewire\Menu;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Menuitem extends Component
{
    public $name;
    public $url;
    public $icon;

    public $active=false;

    public function mount()
    {
        $this->active = strpos(Route::currentRouteName(), $this->url) == 0;
    }



    public function render()
    {
        return view('livewire.menu.menuitem');
    }
}

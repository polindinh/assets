<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{


    public $search;

  
    public function createUserModal()
    {
        $this->emit('createUserModal');
    }


    public function render()
    {
        $q= User::where('is_admin',0);

        if($this->search!=''){
            $q->where('email','like','%'.$this->search.'%');
        }

        $users = $q->paginate(10);
        return view('livewire.users.user-table',['users'=>$users]);
    }
}

<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;

class UserTableRow extends Component
{
    public $user;

    public $confirmDelete;

    public function toggleDeleteModal(){
        $this->confirmDelete = !$this->confirmDelete;
    }
    public function deleteUser($id){
        $this->confirmDelete=false;
        $this->user->delete();
        session()->flash('message','User Deleted Successfully');
        redirect()->route('users.index');

    }
    public function render()
    {
        return view('livewire.users.user-table-row');
    }
}

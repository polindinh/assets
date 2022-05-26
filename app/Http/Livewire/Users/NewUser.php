<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class NewUser extends Component
{

    protected $listeners = [
        'createUserModal'=>'toggleModal',
    ];

    public $name;
    public $email;
    public $password;
    public $password_confirmation;


    public function createNewUser(){
        $this->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
            'password_confirmation'=>'required|same:password',
        ]);

        $user = User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>Hash::make($this->password),
        ]);



        $this->resetInput();
        $this->toggleModal();

        session()->flash('message','User Created Successfully');
        redirect()->route('users.index');
    }

    public function resetInput(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->password_confirmation = '';
    }
    public function toggleModal()
    {
        $this->newUserModal = !$this->newUserModal;
    }

    public $newUserModal=false;

    public function render()
    {
        return view('livewire.users.new-user');
    }
}

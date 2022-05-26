<?php

namespace App\Http\Livewire\Employee;

use App\Models\Employee;
use Livewire\Component;

class NewEmpoyee extends Component
{
    public $showModal=false;

    public $first_name;
    public $last_name;
    public $email;

    protected $listeners = [
        'toggleNewEmployeeModal' => 'toggleModal',
    ];

    public function toggleModal(){
        $this->showModal = !$this->showModal;
    }

    public function createNewEmployee()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
        ]);

        $employee = new Employee();
        $employee->first_name = $this->first_name;
        $employee->last_name = $this->last_name;
        $employee->email = $this->email;
        $employee->save();

        $this->showModal = false;
        $this->resetInput();

        session()->flash('message', 'Employee created successfully!');
        $this->emit('employeeCreated');
    }

    public function resetInput(){
        $this->first_name = null;
        $this->last_name = null;
        $this->email = null;
    }

    public function render()
    {
        return view('livewire.employee.new-empoyee');
    }
}

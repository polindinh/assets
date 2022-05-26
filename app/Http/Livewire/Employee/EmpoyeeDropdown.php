<?php

namespace App\Http\Livewire\Employee;

use App\Models\Employee;
use Livewire\Component;

class EmpoyeeDropdown extends Component
{
    protected $listeners = [
        'employeeCreated' => '$refresh',
    ];

    public $employee;

    public function setEmployee()
    {
        $this->emit('employeeSelected', $this->employee);
    }


    public function toggleNewModal(){
        $this->emit('toggleNewEmployeeModal');
    }

    public function render()
    {
        $employees = Employee::all();
        return view('livewire.employee.empoyee-dropdown', [
            'employees' => $employees,
        ]);
    }
}

<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\PendingStudent;

class AddRegistration extends Component
{
    public $registration_no;

    public function addRegistration()
    {
        $this->validate([
            'registration_no' => 'required|unique:pending_students,registration_no',
        ]);

        PendingStudent::create(['registration_no' => $this->registration_no]);

        session()->flash('message', 'Registration number added successfully!');
        $this->registration_no = '';
    }

    public function render()
    {
        $pendingRegistrations = PendingStudent::all();

        return view('livewire.admin.add-registration', compact('pendingRegistrations'));
        //return view('livewire.admin.add-registration');
    }
}

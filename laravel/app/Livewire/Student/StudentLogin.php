<?php

namespace App\Livewire\Student;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class StudentLogin extends Component
{
    public $registration_no;
    public $password;

    public function login()
    {
        if (Auth::guard('student')->attempt(['registration_no' => $this->registration_no, 'password' => $this->password])) {
            return redirect()->route('student.dashboard');
        } else {
            session()->flash('error', 'Invalid credentials.');
        }
    }

    public function render()
    {
        return view('livewire.student.student-login')->layout('layouts.auth');
        // return view('livewire.student.student-login');
    }
}

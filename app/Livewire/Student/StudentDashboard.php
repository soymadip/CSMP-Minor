<?php

namespace App\Livewire\Student;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class StudentDashboard extends Component
{
    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect()->route('student.login');
    }
    
    public function render()
    {
        return view('livewire.student.student-dashboard')->layout('layouts.student');
    }
}

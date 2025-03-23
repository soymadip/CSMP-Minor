<?php

namespace App\Livewire\Student;

use Livewire\Component;
use App\Models\PendingStudent;
use App\Models\StudentAuth;
use App\Models\PendingStudentDetail;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $registration_no, $email, $password, $password_confirmation;
    public $name, $dob, $phone_no, $department, $semester;

    public function validateRegistration()
    {
        $exists = PendingStudent::where('registration_no', $this->registration_no)->exists();

        if (!$exists) {
            session()->flash('error', 'This registration number is not allowed.');
            return;
        }
    }

    public function register()
    {
        $this->validateRegistration();

        // if (session()->has('error')) {
        //     return;
        // }
        
        $this->validate([
            'registration_no' => 'required|exists:pending_students,registration_no|unique:student_auths,registration_no',
            'email' => 'required|email|unique:student_auths,email',
            'password' => 'required|min:6|confirmed',
            'name' => 'required|string',
            'dob' => 'required|date',
            'phone_no' => 'required|string',
            'department' => 'required|string',
            'semester' => 'required|integer|min:1|max:6',
        ]);

        StudentAuth::create([
            'registration_no' => $this->registration_no,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        PendingStudentDetail::create([
            'registration_no' => $this->registration_no,
            'name' => $this->name,
            'dob' => $this->dob,
            'phone_no' => $this->phone_no,
            'department' => $this->department,
            'semester' => $this->semester,
        ]);

        session()->flash('message', 'Registration submitted for approval!');
        $this->reset();
        // $this->reset();
        //   return redirect()->route('login');
    }
    
    public function render()
    {
        return view('livewire.student.register')->layout('components.layouts.stud_app');
    }
}

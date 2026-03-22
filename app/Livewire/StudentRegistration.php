<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PendingStudent;
use App\Models\StudentAuth;
use App\Models\StudentPersonalDetail;
use Illuminate\Support\Facades\Hash;

class StudentRegistration extends Component
{
    public $registration_no, $email, $password, $password_confirmation, $name, $dob, $phone_no, $department, $semester;
    
    public function updatedRegistrationNo()
    {
        $pendingStudent = PendingStudent::where('registration_no', $this->registration_no)->first();

        if ($pendingStudent) {
            $this->email = $pendingStudent->email;
            $this->name = $pendingStudent->name;
            $this->dob = $pendingStudent->dob;
            $this->phone_no = $pendingStudent->phone_no;
            $this->department = $pendingStudent->department;
            $this->semester = $pendingStudent->semester;
        } else {
            $this->reset(['email', 'name', 'dob', 'phone_no', 'department', 'semester']);
        }
    }

    public function register()
    {
        $this->validate([
            'registration_no' => 'required|exists:pending_students,registration_no|unique:students_auth,registration_no',
            'email' => 'required|email|unique:students_auth,email',
            'password' => 'required|min:6|confirmed',
            'name' => 'required',
            'dob' => 'required|date',
            'phone_no' => 'required',
            'department' => 'required',
            'semester' => 'required|integer',
        ]);

        $studentAuth = StudentAuth::create([
            'registration_no' => $this->registration_no,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        StudentPersonalDetail::create([
            'registration_no' => $this->registration_no,
            'name' => $this->name,
            'dob' => $this->dob,
            'phone_no' => $this->phone_no,
            'department' => $this->department,
            'semester' => $this->semester,
        ]);

        PendingStudent::where('registration_no', $this->registration_no)->update(['status' => 'approved']);

        return redirect()->route('login')->with('success', 'Registration successful. You can now log in.');
    }

    
    public function render()
    {
        // return view('livewire.student-registration');
        return view('livewire.student-registration')->layout('layouts.app');
    }
}

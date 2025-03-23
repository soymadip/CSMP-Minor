<?php

namespace App\Livewire\Student;

use Livewire\Component;
use App\Models\StudentPersonalDetail;
//use Illuminate\Support\Facades\Auth;

class PersonalDetails extends Component
{
    public $name, $registration_no, $dob, $phone_no, $department, $semester;

    protected $rules = [
        'name' => 'required|string|max:255',
        'registration_no' => 'required|string|unique:student_personal_details',
        'dob' => 'required|date',
        'phone_no' => 'required|string|max:15',
        'department' => 'required|string',
        'semester' => 'required|integer|min:1|max:6',
    ];

    public function submit()
    {
        $this->validate();

        StudentPersonalDetail::create([
            'name' => $this->name,
            'registration_no' => $this->registration_no,
            'dob' => $this->dob,
            'phone_no' => $this->phone_no,
            'department' => $this->department,
            'semester' => $this->semester,
        ]);

        session()->flash('message', 'Personal details submitted successfully!');
        $this->reset();
    }
    
    public function render()
    {
        return view('livewire.student.personal-details')->layout('components.layouts.stud_app');
        // return view('livewire.student.personal-details')->extends('components.layouts.stud_app')->section('content');
    }
}

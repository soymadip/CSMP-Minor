<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\PendingStudentDetail;
use App\Models\Student;
use App\Models\StudentAuth;

class ApproveStudents extends Component
{
    public function approve($registration_no)
    {
        $pendingStudent = PendingStudentDetail::where('registration_no', $registration_no)->first();

        if ($pendingStudent) {
            Student::create([
                'registration_no' => $pendingStudent->registration_no,
                'name' => $pendingStudent->name,
                'dob' => $pendingStudent->dob,
                'phone_no' => $pendingStudent->phone_no,
                'department' => $pendingStudent->department,
                'semester' => $pendingStudent->semester,
            ]);
          
            $pendingStudent->delete();
        }

        session()->flash('message', 'Student approved successfully.');
    }

    public function reject($registration_no)
    {
        
        PendingStudentDetail::where('registration_no', $registration_no)->delete();
        StudentAuth::where('registration_no', $registration_no)->delete();

        session()->flash('message', 'Student rejected and removed.');
    }
    
    public function render()
    {
        $pendingStudents = PendingStudentDetail::all();
        return view('livewire.admin.approve-students', compact('pendingStudents'));
        
        //return view('livewire.admin.approve-students');
    }
}

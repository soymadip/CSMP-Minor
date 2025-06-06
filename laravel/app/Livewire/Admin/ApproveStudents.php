<?php

namespace App\Livewire\Admin;

use App\Models\StudentPersonalDetail;
use Livewire\Component;
use App\Models\PendingStudentDetail;
//use App\Models\Student;
use App\Models\StudentAuth;
use Livewire\WithPagination;

class ApproveStudents extends Component
{
    use WithPagination;
    
    public function approve($registration_no)
    {
        $pendingStudent = PendingStudentDetail::where('registration_no', $registration_no)->first();

        if ($pendingStudent) {
            StudentPersonalDetail::create([
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
        //        $pendingStudents = PendingStudentDetail::all();
        $pendingStudents = PendingStudentDetail::paginate(10);
        return view('livewire.admin.approve-students', compact('pendingStudents'));
    }
}

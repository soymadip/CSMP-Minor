<?php

namespace App\Livewire\Hod;

use Livewire\Component;
use App\Models\StudentPersonalDetail;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
//use Illuminate\Support\Facades\Log;

class ViewStudents extends Component
{
    
    use WithPagination;
    
    public function render()
    {
       
        //       $department = Auth::user()->department;
        //      $department = Auth::user()->profile ? Auth::user()->profile->department : null;

        // if (!$department) {
        //     session()->flash('error', 'Please contact the admin.');
        //     return view('livewire.hod.view-students', ['students' => collect()]); 
        // }
        // Log::info('HOD Department:', ['department' => $department]);
        
        $students = StudentPersonalDetail::where('department', Auth::user()->profile->department)->paginate(10);

        // Log::info('Fetched Students:', $students->toArray());
        //     dd($department, $students);
        return view('livewire.hod.view-students', compact('students'));
    }
}

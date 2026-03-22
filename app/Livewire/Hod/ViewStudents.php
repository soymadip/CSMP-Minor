<?php

namespace App\Livewire\Hod;

use Livewire\Component;
use App\Models\StudentPersonalDetail;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

#[Title('Student Details')]
class ViewStudents extends Component
{
    
    use WithPagination;
    
    public function render()
    {
        $students = StudentPersonalDetail::where('department', Auth::user()->profile->department)->paginate(10);

        return view('livewire.hod.view-students', compact('students'));
    }
}

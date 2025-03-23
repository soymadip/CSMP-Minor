<?php

namespace App\Livewire\Admin;

use App\Models\Student;
use Livewire\Component;
//use App\Models\StudentPersonalDetail;
use PDF;

class GenerateStudentId extends Component
{
    public function render()
    {
        $students = Student::all();
        return view('livewire.admin.generate-student-id', compact('students'));
        //        return view('livewire.admin.generate-student-id');
    }

    public function downloadPDF($registration_no)
    {
        $student = Student::where('registration_no', $registration_no)->first();
        $pdf = PDF::loadView('livewire.admin.id-card-pdf', compact('student'));
        return response()->streamDownload(fn () => print($pdf->output()), "{$registration_no}_id_card.pdf");
    }
}

<?php

namespace App\Livewire\Admin;

use App\Models\StudentPersonalDetail;
use Livewire\Component;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\View;
use Livewire\Attributes\Title;

#[Title('Generate ID Cards')]
class GenerateStudentId extends Component
{
    public function render()
    {
        $students = StudentPersonalDetail::all();
        return view('livewire.admin.generate-student-id', compact('students'));
    }

    public function downloadPDF($registration_no)
    {
        $student = StudentPersonalDetail::where('registration_no', $registration_no)->firstOrFail();
        $html = View::make('livewire.admin.id-card-pdf', compact('student'))->render();
 
        $pdf = Browsershot::html($html)
            ->addChromiumArguments([               
                '--disable-gpu',
                '--no-zygote',
                '--single-process',
                '--disable-extensions',
            ])
            ->emulateMedia('screen')
            ->preventUnsuccessfulResponse()
            ->newHeadless()
            ->format('A4') 
            ->noSandbox()
            ->showBackground()
            ->transparentBackground()
            ->timeout(30)
            ->waitUntilNetworkIdle()
            ->pdf();

        return response()->streamDownload(fn () => print($pdf), "{$registration_no}_id_card.pdf");        
    }
}

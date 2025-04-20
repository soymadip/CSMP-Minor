<?php

namespace App\Livewire\Admin;

use App\Models\Student;
use Livewire\Component;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\View;

class GenerateStudentId extends Component
{
    public function render()
    {
        $students = Student::all();
        return view('livewire.admin.generate-student-id', compact('students'));
    }

    public function downloadPDF($registration_no)
    {
        // $imgPath = public_path('icons/cts.png');
        // $imgType = pathinfo($imgPath, PATHINFO_EXTENSION);
        // $imgData = file_get_contents($imgPath);
        // $data['img'] = 'data:image/' . $imgType . ';base64,' . base64_encode($imgData);
        
        $student = Student::where('registration_no', $registration_no)->firstOrFail();
        $html = View::make('livewire.admin.id-card-pdf', compact('student'))->render();
 
        $pdf = Browsershot::html($html)
            ->addChromiumArguments([               
                '--disable-gpu',
                '--no-zygote',
                '--single-process',
                '--disable-extensions',
                // '--disable-dev-shm-usage',
            ])
            ->emulateMedia('screen')
            ->preventUnsuccessfulResponse()
            ->newHeadless()
            ->format('A4') 
            //  ->margins(2, 2, 2, 2)          
            ->noSandbox()
            ->showBackground()
            ->transparentBackground()
            ->timeout(30)
            ->waitUntilNetworkIdle()
            ->pdf();

        return response()->streamDownload(fn () => print($pdf), "{$registration_no}_id_card.pdf");        
    }
}

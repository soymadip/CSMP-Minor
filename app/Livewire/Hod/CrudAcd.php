<?php

namespace App\Livewire\Hod;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CrudAcd extends Component
{
    public $department = [];

    public function mount()
    {
        $this->department = Auth::user()->profile->department ?? 'Not Assigned';
    }

    public function render()
    {
        return view('livewire.hod.crud-acd');
    }
}

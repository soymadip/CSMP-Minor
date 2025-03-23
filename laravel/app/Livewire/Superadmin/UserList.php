<?php

namespace App\Livewire\Superadmin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    
    public function render()
    {
        $users = User::with('roles', 'profile')
            ->where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->paginate(10);
        
        return view('livewire.superadmin.user-list', compact('users'));
    }
}

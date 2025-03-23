<?php

namespace App\Livewire\Superadmin;

use Livewire\Component;
use App\Models\User;
use App\Models\UserProfile;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Component
{

    public $name, $email, $password, $role, $dob, $department;
    public $roles = [], $departments = [];

    public function mount()
    {
        // $this->roles = Role::all();
        $this->roles = Role::where('name', '!=', 'student')->get();
        $this->departments = ['DCST', 'DEE', 'DME', 'DCE', 'OFFICE', 'AC_COUNCIL', 'TPO'];
    }

    public function createUser()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required',
            'dob' => 'nullable|date',
            'department' => 'required|string|in:' . implode(',', $this->departments),
        ]);

     
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $user->assignRole($this->role);

     
        UserProfile::create([
            'user_id' => $user->id,
            'dob' => $this->dob,
            'department' => $this->department,
        ]);

        session()->flash('message', 'User created successfully!');
        $this->reset();
    }
    
    public function render()
    {
        
        return view('livewire.superadmin.create-user');
    }
}

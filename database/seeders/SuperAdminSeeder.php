<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure the superadmin role exists (redundant but safe)
        $role = Role::firstOrCreate(['name' => 'superadmin']);

        // Create the Super Admin user
        $user = User::updateOrCreate(
            ['email' => config('app.superadmin.email')],
            [
                'name' => 'Super Admin',
                'password' => Hash::make(config('app.superadmin.password')),
            ]
        );

        // Assign the role
        $user->assignRole($role);
    }
}

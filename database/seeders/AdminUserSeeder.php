<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
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
            ['email' => 'admin@csmp.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'),
            ]
        );

        // Assign the role
        $user->assignRole($role);
    }
}

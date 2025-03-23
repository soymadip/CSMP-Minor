<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
//use App\Models\User;

class RolesSeeder extends Seeder
{
   
    public function run(): void
    {
        //
	$roles = ['superadmin', 'admin', 'hod', 'teacher', 'ac_council', 'tpo', 'user', 'student'];

        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role]);
    }
        $permissions = [
            'manage users',
            'view department students',
            'edit student records',
            'approve student applications',
            'assign teachers',
            'manage placements',
        ];
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }
        $this->assignPermissionsToRoles();
                
    }
    private function assignPermissionsToRoles()
    {
       
        $superadmin = Role::where('name', 'superadmin')->first();
        $hod = Role::where('name', 'hod')->first();
        $teacher = Role::where('name', 'teacher')->first();
        $ac_council = Role::where('name', 'ac_council')->first();
        $tpo = Role::where('name', 'tpo')->first();

        if ($superadmin) {
            $superadmin->givePermissionTo([
                'manage users',
                'view department students',
                'edit student records',
                //    'approve student applications',
                'assign teachers',
                //    'manage placements'
            ]);
        }

        if ($hod) {
            $hod->givePermissionTo(['view department students', 'edit student records']);
        }

        if ($teacher) {
            $teacher->givePermissionTo(['view department students']);
        }

        if ($ac_council) {
            $ac_council->givePermissionTo(['approve student applications']);
        }

        if ($tpo) {
            $tpo->givePermissionTo(['manage placements']);
        }
    }
}

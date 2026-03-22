<?php

// To generate test users
// php artisan db:seed --class=StudentTestSeeder

namespace Database\Seeders;

use App\Models\User;
use App\Models\StudentAuth;
use App\Models\StudentPersonalDetail;
use Illuminate\Database\Seeder;

class StudentTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Mock Students for ID Card Testing
        $students = [
            [
                'name' => 'John Doe',
                'registration_no' => '2024001',
                'department' => 'Computer Science',
                'blood_group' => 'O+',
                'address' => '123 Tech Lane, Kolkata',
                'gurdian_name' => 'Robert Doe',
                'dob' => '2005-05-15',
                'semester' => 4,
                'phone_no' => '9876543210',
                'dp' => 'profile_photos/placeholder.png'
            ],
            [
                'name' => 'Jane Smith',
                'registration_no' => '2024002',
                'department' => 'Electronics',
                'blood_group' => 'A-',
                'address' => '456 Circuit Ave, HOWRAH',
                'gurdian_name' => 'William Smith',
                'dob' => '2006-02-20',
                'semester' => 2,
                'phone_no' => '9876543211',
                'dp' => 'profile_photos/placeholder.png'
            ],
            [
                'name' => 'Alex Ross',
                'registration_no' => '2024003',
                'department' => 'Mechanical',
                'blood_group' => 'B+',
                'address' => '789 Steel St, DURGAPUR',
                'gurdian_name' => 'James Ross',
                'dob' => '2005-11-10',
                'semester' => 6,
                'phone_no' => '9876543212',
                'dp' => 'profile_photos/placeholder.png'
            ]
        ];

        foreach ($students as $studentData) {
            // Create Student Auth
            $auth = StudentAuth::firstOrCreate(
                ['registration_no' => $studentData['registration_no']],
                [
                    'email' => strtolower(str_replace(' ', '', $studentData['name'])) . '@example.com',
                    'password' => bcrypt('password123')
                ]
            );

            // Create Personal Details
            StudentPersonalDetail::firstOrCreate(
                ['registration_no' => $studentData['registration_no']],
                $studentData
            );
        }
    }
}

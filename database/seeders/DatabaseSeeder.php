<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesSeeder::class,
            SuperAdminSeeder::class,
        ]);

        # Only run in dev server
        if (app()->isLocal()) {
            $this->call([
                StudentTestSeeder::class,
            ]);
        }
        
        // Use 'php artisan db:seed --class=StudentTestSeeder' for test accounts
    }
}

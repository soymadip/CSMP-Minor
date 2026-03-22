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
        ]);

        if (app()->isLocal()) {
            $this->call([
                AdminUserSeeder::class,
                StudentTestSeeder::class,
            ]);
        }
        
        // Use 'php artisan db:seed --class=StudentTestSeeder' for test accounts
    }
}

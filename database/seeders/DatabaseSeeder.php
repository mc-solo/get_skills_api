<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\Assignment;
use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed roles
       $this->call(RolesTabSeeder::class);
       
        // Seed users
        // User::factory(10)->create();

        // Seed courses
        // Course::factory(10)->create();

        // Seed assignments
        // Assignment::factory(10)->create();

        // Create a specific test user
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'role_id' => Role::where('Role', 'Admin')->first()->id, // Assign Admin role
        // ]);
    }
}

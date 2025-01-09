<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed 10 random users with different roles
        User::factory(10)->create();

        // Create specific users with different roles
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'role_id' => \App\Models\Role::where('role', 'Admin')->first()->id, // Assign Admin role
            'password' => \Illuminate\Support\Facades\Hash::make('admin123'), // You can set a specific password for this user
        ]);

        User::factory()->create([
            'name' => 'Student User',
            'email' => 'student@example.com',
            'role_id' => \App\Models\Role::where('role', 'Student')->first()->id, // Assign Student role
            'password' => \Illuminate\Support\Facades\Hash::make('student123'),
        ]);
        
        User::factory()->create([
            'name' => 'Instructor User',
            'email' => 'instructor@example.com',
            'role_id' => \App\Models\Role::where('role', 'Instructor')->first()->id, // Assign Instructor role
            'password' => \Illuminate\Support\Facades\Hash::make('instructor123'),
        ]);
    }
}

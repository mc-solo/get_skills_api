<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['role' => 'Student']);
        Role::create(['role' => 'Instructor']);
        Role::create(['role' => 'Parent']);
        Role::create(['role' => 'Admin']);
    }
}

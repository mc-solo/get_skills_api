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
       $this->call([
        UserSeeder::class,
        CourseSeeder::class,
        ReviewSeeder::class,
       ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\User;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /**
         * Notes for emmanuel: this is just to make sure that we do have users 
         * before seeding the courses [the course seeder uses instructor id from the users migration]
         */

        if(User::count()=== 0) {
            $this->call(UserSeeder::class);
        }

        Course::factory(25)->create();
    }
}

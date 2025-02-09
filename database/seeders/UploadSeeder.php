<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Upload;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UploadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Course::count() === 0) {
            $this->call(CourseSeeder::class);
        }

        Course::all()->each(function ($course) {
            Upload::factory(2)->create(['course_id'=> $course->id]);
        });
    }
}

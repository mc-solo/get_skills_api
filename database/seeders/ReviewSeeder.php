<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\Course;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Course::count() === 0) {
            $this->call(CourseSeeder::class);
        }

        Course::all()->each(fn($course) => Review::factory(3)->create(['course_id' => $course->id]));
    }
}


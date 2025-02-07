<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Course::class;
    public function definition(): array
    {
        $courseTitles = [
            'Laravel for Beginners', 
            'Mastering JavaScript ES6+', 
            'Full-Stack Web Development', 
            'Introduction to Machine Learning',
            'Advanced PHP and Laravel', 
            'Database Design and Optimization',
            'REST API Development with Laravel',
            'React and Next.js Fundamentals',
            'Cybersecurity for Developers',
            'Mastering Data Structures & Algorithms',
            'DevOps and CI/CD Pipelines',
            'Cloud Computing with AWS',
            'Python for Data Science',
            'Blockchain Development Basics',
            'Flutter Mobile App Development',
        ];

        return [
            'title'=>Arr::random($courseTitles),
            'description'=>$this->faker->paragraph(1, true),
            'instructor_id'=>User::inRandomOrder()?->value('id') ?? User::factory(),
            'thumbnail'=>$this->faker->imageUrl(),
            'price'=>$this->faker->numberBetween(100,10000),
            'level'=>$this->faker->randomElement(['beginner', 'intermediate', 'advanced']),
            'requirements'=>$this->faker->paragraph(),
            'video_url'=>'https://www.youtube.com/watch?v=' . $this->faker->regexify('[A-Za-z0-9]{11}'),
            'tags'=>json_encode([$this->faker->word(), $this->faker->word()]),
        ];
    }
}

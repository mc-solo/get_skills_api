<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Course;
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
        return [
            'title'=>$this->faker->sentence(),
            'description'=>$this->faker->paragraph(2),
            'instructor_id'=>User::inRandomOrder()?->id ?? User::factory(),
            'thumbnail'=>$this->faker->imageUrl(),
            'price'=>$this->faker->numberBetween(100,10000),
            'level'=>$this->faker->randomElement(['beginner', 'intermediate', 'advanced']),
            'requirements'=>$this->faker->paragraph(),
            'video_url'=>$this->faker->url(),
            'tags'=>json_encode([$this->faker->word(), $this->faker->word()]),
        ];
    }
}

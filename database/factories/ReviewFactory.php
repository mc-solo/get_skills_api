<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Review::class;
    public function definition(): array
    {

        return [
            'user_id' =>User::query()->inRandomOrder()->value('id') ?? User::factory(),
            'course_id' => Course::query()->inRandomOrder()->value('id') ?? Course::factory(),
            'rating' => $this->faker->numberBetween(1, 5),
            'review_text' => $this->faker->optional()->realText(),
        ];
    }
}

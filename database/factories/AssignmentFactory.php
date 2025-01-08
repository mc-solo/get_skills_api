<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Assignment;
use App\Models\Course;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assignment>
 */
class AssignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Assignment::class;
    public function definition(): array
    {
        return [
            'assignment_name' => $this->faker->sentence(4),
            'description' => $this->faker->paragraph(1),
            'due_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'course_id' => Course::factory(),
            'instructor_id' => User::factory(),
        ];
    }
}

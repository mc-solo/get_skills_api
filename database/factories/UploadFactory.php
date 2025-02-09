<?php

namespace Database\Factories;

use App;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Upload>
 */
class UploadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    //  protected $model = Upload::class;
    public function definition(): array
    {
        return [
            'course_id' => Course::query()->inRandomOrder()->first()?->id ?? Course::factory(),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(1, true),
            'file_path' => 'uploads/' . $this->faker->uuid() . '.pdf',
            'file_name' => $this->faker->words(3, true) . '.pdf',
        ];
    }
}

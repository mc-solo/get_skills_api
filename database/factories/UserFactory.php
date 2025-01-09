<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Role; // Ensure Role model is imported

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password = null;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(), 
            'password' => static::$password ??= Hash::make('password'), // Default password
            'remember_token' => Str::random(10), 
            'date_of_birth' => $this->faker->date('Y-m-d', '-18 years'), 
            'department' => $this->faker->randomElement(['Math', 'Science', 'History', 'English', 'Computer Science']), 
            'address' => $this->faker->address(), 
            'hire_date' => $this->faker->date('Y-m-d', '-2 years'), 
            'role_id' => Role::inRandomOrder()->first()->id, // Randomly assign an existing role
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'marks' => fake()->numberBetween(50, 100),
            'subject' => fake()->word(),
            'student_id' => fake()->numberBetween(1, 5),
            'semister_id' => fake()->numberBetween(1, 5),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Calender>
 */
class CalenderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'aktivitas' => fake()->sentence(),
                'tanggal_mulai' => fake()->date(),
                'tanggal_akhir' => fake()->date(),
        ];
    }

    public function finish(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => true,
        ]);
    }
}

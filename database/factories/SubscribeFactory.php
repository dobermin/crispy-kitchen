<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class SubscribeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['email' => "string", 'created_at' => "\Illuminate\Support\Carbon", 'updated_at' => "\Illuminate\Support\Carbon"])] public function definition(): array
    {
        $date = now();
        return [
            'email' => $this->faker->unique()->email(),
            'created_at' => $date,
            'updated_at' => $date
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['full_name' => "string", 'phone_number' => "string", 'email' => "string", 'message' => "string", 'created_at' => "string", 'updated_at' => "string"])] public function definition(): array
    {
        $date = $this->faker->date();
        return [
            'full_name' => $this->faker->userName,
            'phone_number' => $this->faker->numerify('###-###-####'),
            'email' => $this->faker->email,
            'message' => $this->faker->text(mt_rand(20, 300)),
            'created_at' => $date,
            'updated_at' => $date
        ];
    }
}

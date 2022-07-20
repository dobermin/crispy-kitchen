<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "string", 'email' => "string", 'comment' => "string", 'news_id' => "int", 'created_at' => "\DateTime", 'updated_at' => "\DateTime"])] public function definition(): array
    {
        $date = $this->faker->dateTimeBetween('-1 month');
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email,
            'comment' => $this->faker->realText(mt_rand(20, 200)),
            'news_id' => mt_rand(1, 6),
            'created_at' => $date,
            'updated_at' => $date
        ];
    }
}

<?php

namespace Database\Seeders;

use App\Models\News;
use Carbon\Carbon;
use Faker\Generator;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = now();
        $faker = app(Generator::class);
        News::factory()->create([
            'title' => 'Healthy Lifestyle and happy living tips',
            'category' => 'Featured',
            'img' => 'pablo-merchan-montes-Orz90t6o0e4-unsplash.jpg',
            'article' => $faker->text(mt_rand(500, 2000)),
            'created_at' => $date,
            'updated_at' => $date
        ]);
        News::factory()->create([
            'title' => 'How to make a healthy meal',
            'category' => 'Featured',
            'img' => 'stefan-johnson-xIFbDeGcy44-unsplash.jpg',
            'article' => $faker->text(mt_rand(500, 2000)),
            'created_at' => $date,
            'updated_at' => $date
        ]);
        News::factory()->create([
            'title' => 'Is Coconut good for you?',
            'category' => 'Promotions',
            'img' => 'gilles-lambert-S_LhjpfIdm4-unsplash.jpg',
            'date' => Carbon::parse('8 April 2022'),
            'article' => $faker->text(mt_rand(500, 2000)),
            'created_at' => $date,
            'updated_at' => $date
        ]);
        News::factory()->create([
            'title' => 'Salmon Steak Noodle',
            'category' => 'News',
            'img' => 'caroline-attwood-bpPTlXWTOvg-unsplash.jpg',
            'article' => $faker->text(mt_rand(500, 2000)),
            'created_at' => $date,
            'updated_at' => $date
        ]);
        News::factory()->create([
            'title' => 'Making a healthy salad',
            'category' => 'Meeting',
            'img' => 'louis-hansel-GiIiRV0FjwU-unsplash.jpg',
            'date' => Carbon::parse('30 April 2022'),
            'article' => $faker->text(mt_rand(500, 2000)),
            'created_at' => $date,
            'updated_at' => $date
        ]);
        News::factory()->create([
            'title' => 'How to run a sushi business?',
            'category' => 'Career',
            'img' => 'ella-olsson-mmnKI8kMxpc-unsplash.jpg',
            'article' => $faker->text(mt_rand(500, 2000)),
            'date' => Carbon::parse('18 April 2022'),
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }
}

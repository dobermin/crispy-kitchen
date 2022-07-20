<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = now();
        Dish::factory()->create([
            'title' => 'Delicious Steaks',
            'reviews' => '1,206',
            'stars' => 4.4,
            'main' => true,
            'place' => 'Manhattan, New York',
            'restaurant' => 'Fine Dining Restaurant',
            'img' => 'jay-wennington-N_Y88TWmGwA-unsplash.jpg',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        Dish::factory()->create([
            'title' => 'Steak',
            'reviews' => '',
            'stars' => 3.8,
            'img' => 'jason-leung-O67LZfeyYBk-unsplash.jpg',
            'price' => 26.50,
            'created_at' => $date,
            'updated_at' => $date
        ]);
        Dish::factory()->create([
            'title' => 'Sausage Pasta',
            'reviews' => '',
            'stars' => 4.2,
            'img' => 'ivan-torres-MQUqbmszGGM-unsplash.jpg',
            'price' => 18.25,
            'created_at' => $date,
            'updated_at' => $date
        ]);
        Dish::factory()->create([
            'title' => 'Healthy Soup',
            'reviews' => 64,
            'stars' => 3,
            'img' => 'farhad-ibrahimzade-D5c9ZciQy_I-unsplash.jpg',
            'price' => 34.20,
            'meal' => 'Lunch',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        Dish::factory()->create([
            'title' => 'Burger Set',
            'reviews' => 102,
            'stars' => 4.3,
            'img' => 'louis-hansel-dphM2U1xq0U-unsplash.jpg',
            'price' => 20.50,
            'meal' => 'Breakfast',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        Dish::factory()->create([
            'title' => 'Seafood Set',
            'reviews' => 44,
            'stars' => 3,
            'img' => 'farhad-ibrahimzade-ZipYER3NLhY-unsplash.jpg',
            'price' => 124,
            'oldPrice' => 86,
            'meal' => 'Dinner',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        Dish::factory()->create([
            'title' => 'Premium Steak',
            'reviews' => 86,
            'stars' => 3,
            'img' => 'keriliwi-c3mFafsFz2w-unsplash.jpg',
            'price' => 45,
            'oldPrice' => 150,
            'meal' => 'Dinner',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        Dish::factory()->create([
            'title' => 'Tooplate Soup',
            'reviews' => 50,
            'stars' => 3,
            'img' => 'farhad-ibrahimzade-MGKqxm6u2bc-unsplash.jpg',
            'price' => 24.50,
            'meal' => 'Lunch',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        Dish::factory()->create([
            'title' => 'Baked Creamy',
            'reviews' => 64,
            'stars' => 3,
            'img' => 'lucas-swennen-1W_MyJSRLuQ-unsplash.jpg',
            'price' => 16.50,
            'meal' => 'Breakfast',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        Dish::factory()->create([
            'title' => 'Fresh Start',
            'reviews' => 128,
            'stars' => 4.4,
            'img' => 'brett-jordan-8xt8-HIFqc8-unsplash.jpg',
            'price' => 24.50,
            'meal' => 'Breakfast',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        Dish::factory()->create([
            'title' => 'Bread Steak Set',
            'reviews' => 84,
            'stars' => 3,
            'img' => 'louis-hansel-rheOvfxOlOA-unsplash.jpg',
            'price' => 42.50,
            'meal' => 'Lunch',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        Dish::factory()->create([
            'title' => 'Super Steak Set',
            'reviews' => 66,
            'stars' => 4.2,
            'img' => 'louis-hansel-cH5IPjaAYyo-unsplash.jpg',
            'price' => 32.75,
            'oldPrice' => 55,
            'meal' => 'Lunch',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        Dish::factory()->create([
            'title' => 'Salmon Set',
            'reviews' => 76,
            'stars' => 3,
            'img' => 'farhad-ibrahimzade-isHUj3N0194-unsplash.jpg',
            'price' => 60,
            'meal' => 'Dinner',
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }
}

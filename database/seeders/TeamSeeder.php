<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = now();
        Team::factory()->create([
            'name' => 'Sophia',
            'position' => 'CEO &amp; Founder',
            'img' => 'matthew-hamilton-tNCH0sKSZbA-unsplash.jpg',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        Team::factory()->create([
            'name' => 'Benjamin W.',
            'position' => 'Restaurant Manager',
            'img' => 'nicolas-horn-MTZTGvDsHFY-unsplash.jpg',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        Team::factory()->create([
            'name' => 'Muchen Jack',
            'position' => 'Senior Chef',
            'img' => 'rc-cf-FMh5o5m5N9E-unsplash.jpg',
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Art;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Art::create([
            'pokemon_id' => 3,
            'file' => '/images/my-art/3.png'
        ]);

        Art::create([
            'pokemon_id' => 4,
            'file' => '/images/my-art/4.png'
        ]);
    }
}

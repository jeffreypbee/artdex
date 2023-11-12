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
            'pokemon_id' => 1,
            'file' => 'abcdefg'
        ]);
    }
}

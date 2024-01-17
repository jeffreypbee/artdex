<?php

namespace Database\Seeders;

use App\Models\Generation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1
        Generation::create([
            'color' => '#dd0000'
        ]);

        // 2
        Generation::create([
            'color' => '#dd9900'
        ]);

        // 3
        Generation::create([
            'color' => '#dddd00'
        ]);

        // 4
        Generation::create([
            'color' => '#99dd00'
        ]);

        // 5
        Generation::create([
            'color' => '#00dd99'
        ]);

        // 6
        Generation::create([
            'color' => '#00dddd'
        ]);

        // 7
        Generation::create([
            'color' => '#0099dd'
        ]);

        // 8
        Generation::create([
            'color' => '#9900dd'
        ]);

        // 8
        Generation::create([
            'color' => '#dd0099'
        ]);
    }
}

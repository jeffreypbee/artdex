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
        for($i = 1; $i <= 9; $i++) {
            Generation::create([
                'generation' => $i
            ]);
        }
    }
}

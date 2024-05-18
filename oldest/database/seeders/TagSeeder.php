<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create([
            'name' => 'Baby',
            'icon' => 'baby-carriage',
            'color' => '#ffdddd'
        ]);

        Tag::create([
            'name' => 'Legendary',
            'icon' => 'star',
            'color' => '#ffffcc'
        ]);

        Tag::create([
            'name' => 'Paradox',
            'icon' => 'circle-question',
            'color' => '#ffaaff'
        ]);
    }
}

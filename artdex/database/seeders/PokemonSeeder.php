<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pkmn = Pokemon::create([
            'number' => 1,
            'name' => 'Bulbasaur'
        ]);

        $pkmn->types()->attach([10, 14]);

        $pkmn = Pokemon::create([
            'number' => 4,
            'name' => 'Charmander'
        ]);

        $pkmn->types()->attach([7]);
    }
}

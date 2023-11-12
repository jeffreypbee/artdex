<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use App\Models\PokemonType;
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

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'grass')->first()->id,
            PokemonType::where('name', '=', 'poison')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 2,
            'name' => 'Ivysaur'
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'grass')->first()->id,
            PokemonType::where('name', '=', 'poison')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 3,
            'name' => 'Venusaur'
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'grass')->first()->id,
            PokemonType::where('name', '=', 'poison')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 4,
            'name' => 'Charmander'
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fire')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 5,
            'name' => 'Charmeleon'
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fire')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 6,
            'name' => 'Charizard'
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fire')->first()->id,
            PokemonType::where('name', '=', 'flying')->first()->id
        ]);
    }
}

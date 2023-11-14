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

        $pkmn = Pokemon::create([
            'number' => 167,
            'name' => 'Spinarak'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'bug')->first()->id,
            PokemonType::where('name', '=', 'poison')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 168,
            'name' => 'Ariados'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'bug')->first()->id,
            PokemonType::where('name', '=', 'poison')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 170,
            'name' => 'Chinchou'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'water')->first()->id,
            PokemonType::where('name', '=', 'electric')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 171,
            'name' => 'Lanturn'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'water')->first()->id,
            PokemonType::where('name', '=', 'electric')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 287,
            'name' => 'Slakoth'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'normal')->first()->id
        ]);

        
        $pkmn = Pokemon::create([
            'number' => 288,
            'name' => 'Vigoroth'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'normal')->first()->id
        ]);

        
        $pkmn = Pokemon::create([
            'number' => 289,
            'name' => 'Slaking'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'normal')->first()->id
        ]);

        
        $pkmn = Pokemon::create([
            'number' => 302,
            'name' => 'Sableye'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'dark')->first()->id,
            PokemonType::where('name', '=', 'ghost')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 307,
            'name' => 'Meditite'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fighting')->first()->id,
            PokemonType::where('name', '=', 'psychic')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 308,
            'name' => 'Medicham'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fighting')->first()->id,
            PokemonType::where('name', '=', 'psychic')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 441,
            'name' => 'Chatot'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'normal')->first()->id,
            PokemonType::where('name', '=', 'flying')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 443,
            'name' => 'Gible'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'dragon')->first()->id,
            PokemonType::where('name', '=', 'ground')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 444,
            'name' => 'Gabite'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'dragon')->first()->id,
            PokemonType::where('name', '=', 'ground')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 445,
            'name' => 'Garchomp'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'dragon')->first()->id,
            PokemonType::where('name', '=', 'ground')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 582,
            'name' => 'Vanillite'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'ice')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 583,
            'name' => 'Vanillish'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'ice')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 584,
            'name' => 'Vanilluxe'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'ice')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 599,
            'name' => 'Klink'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'steel')->first()->id
        ]);
    
        $pkmn = Pokemon::create([
            'number' => 600,
            'name' => 'Klang'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'steel')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 601,
            'name' => 'Klinkang'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'steel')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 679,
            'name' => 'Honedge'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'steel')->first()->id,
            PokemonType::where('name', '=', 'ghost')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 680,
            'name' => 'Doublade'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'steel')->first()->id,
            PokemonType::where('name', '=', 'ghost')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 681,
            'name' => 'Aegislash'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'steel')->first()->id,
            PokemonType::where('name', '=', 'ghost')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 682,
            'name' => 'Spritzee'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fairy')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 683,
            'name' => 'Aromatisse'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fairy')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 739,
            'name' => 'Crabrawler'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fighting')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 740,
            'name' => 'Crabominable'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fighting')->first()->id,
            PokemonType::where('name', '=', 'ice')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 742,
            'name' => 'Cutiefly'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'bug')->first()->id,
            PokemonType::where('name', '=', 'fairy')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 743,
            'name' => 'Ribombee'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'bug')->first()->id,
            PokemonType::where('name', '=', 'fairy')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 827,
            'name' => 'Nickit'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'dark')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 828,
            'name' => 'Thievul'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'dark')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 852,
            'name' => 'Clobbopus'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fighting')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 853,
            'name' => 'Grapploct'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fighting')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 938,
            'name' => 'Tadbulb'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'electric')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 939,
            'name' => 'Bellibolt'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'electric')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 948,
            'name' => 'Toedscool'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'ground')->first()->id,
            PokemonType::where('name', '=', 'grass')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 949,
            'name' => 'Toedscruel'    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'ground')->first()->id,
            PokemonType::where('name', '=', 'grass')->first()->id
        ]);
    
    }
    
}

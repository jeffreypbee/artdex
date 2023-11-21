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
            'name' => 'Bulbasaur',
            'generation_id' => 1
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'grass')->first()->id,
            PokemonType::where('name', '=', 'poison')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 2,
            'name' => 'Ivysaur',
            'generation_id' => 1
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'grass')->first()->id,
            PokemonType::where('name', '=', 'poison')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 3,
            'name' => 'Venusaur',
            'generation_id' => 1
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'grass')->first()->id,
            PokemonType::where('name', '=', 'poison')->first()->id
        ]);

        $pkmn->art()->create([
            'file' => 'art\w2H4JGnVEvNOEKKIW1lN9uAR5Ka3J9TySxXlioub.png',
            'date' => '2023-11-01'
        ]);

        $pkmn = Pokemon::create([
            'number' => 4,
            'name' => 'Charmander',
            'generation_id' => 1
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fire')->first()->id
        ]);

        $pkmn->art()->create([
            'file' => 'art\2OSFDLovuHZSbaZgOn0GZdAHYtWbKFO6bFM2SOMr.png',
            'date' => '2023-10-01'
        ]);

        $pkmn = Pokemon::create([
            'number' => 5,
            'name' => 'Charmeleon',
            'generation_id' => 1
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fire')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 6,
            'name' => 'Charizard',
            'generation_id' => 1
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fire')->first()->id,
            PokemonType::where('name', '=', 'flying')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 167,
            'name' => 'Spinarak',
            'generation_id' => 2  
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'bug')->first()->id,
            PokemonType::where('name', '=', 'poison')->first()->id
        ]);

        $pkmn->art()->create([
            'file' => 'art/167.png',
            'date' => '2023-11-03'
        ]);

        $pkmn = Pokemon::create([
            'number' => 168,
            'name' => 'Ariados',
            'generation_id' => 2  
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'bug')->first()->id,
            PokemonType::where('name', '=', 'poison')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 170,
            'name' => 'Chinchou',
            'generation_id' => 2    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'water')->first()->id,
            PokemonType::where('name', '=', 'electric')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 171,
            'name' => 'Lanturn',
            'generation_id' => 2    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'water')->first()->id,
            PokemonType::where('name', '=', 'electric')->first()->id
        ]);

        $pkmn->art()->create([
            'file' => 'art/171.png',
            'date' => '2023-11-04'
        ]);

        $pkmn = Pokemon::create([
            'number' => 287,
            'name' => 'Slakoth',
            'generation_id' => 3    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'normal')->first()->id
        ]);

        
        $pkmn = Pokemon::create([
            'number' => 288,
            'name' => 'Vigoroth',
            'generation_id' => 3    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'normal')->first()->id
        ]);

        $pkmn->art()->create([
            'file' => 'art/288.png',
            'date' => '2023-11-10'
        ]);
        
        $pkmn = Pokemon::create([
            'number' => 289,
            'name' => 'Slaking',
            'generation_id' => 3   
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'normal')->first()->id
        ]);

        
        $pkmn = Pokemon::create([
            'number' => 302,
            'name' => 'Sableye',
            'generation_id' => 3   
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'dark')->first()->id,
            PokemonType::where('name', '=', 'ghost')->first()->id
        ]);

        $pkmn->art()->create([
            'file' => 'art/302.png',
            'date' => '2023-11-09'
        ]);

        $pkmn = Pokemon::create([
            'number' => 307,
            'name' => 'Meditite',
            'generation_id' => 3    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fighting')->first()->id,
            PokemonType::where('name', '=', 'psychic')->first()->id
        ]);

        $pkmn->art()->create([
            'file' => 'art/307.png',
            'date' => '2023-11-11'
        ]);

        $pkmn = Pokemon::create([
            'number' => 308,
            'name' => 'Medicham',
            'generation_id' => 3  
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fighting')->first()->id,
            PokemonType::where('name', '=', 'psychic')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 441,
            'name' => 'Chatot',
            'generation_id' => 4 
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'normal')->first()->id,
            PokemonType::where('name', '=', 'flying')->first()->id
        ]);

        $pkmn->art()->create([
            'file' => 'art/441.png',
            'date' => '2024-01-01'
        ]);

        $pkmn = Pokemon::create([
            'number' => 443,
            'name' => 'Gible',
            'generation_id' => 4 
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'dragon')->first()->id,
            PokemonType::where('name', '=', 'ground')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 444,
            'name' => 'Gabite',
            'generation_id' => 4   
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'dragon')->first()->id,
            PokemonType::where('name', '=', 'ground')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 445,
            'name' => 'Garchomp',
            'generation_id' => 4  
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'dragon')->first()->id,
            PokemonType::where('name', '=', 'ground')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 582,
            'name' => 'Vanillite',
            'generation_id' => 5   
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'ice')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 583,
            'name' => 'Vanillish',
            'generation_id' => 5     
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'ice')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 584,
            'name' => 'Vanilluxe',
            'generation_id' => 5    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'ice')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 599,
            'name' => 'Klink',
            'generation_id' => 5    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'steel')->first()->id
        ]);
    
        $pkmn = Pokemon::create([
            'number' => 600,
            'name' => 'Klang',
            'generation_id' => 5     
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'steel')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 601,
            'name' => 'Klinkang',
            'generation_id' => 5     
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'steel')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 679,
            'name' => 'Honedge',
            'generation_id' => 6   
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'steel')->first()->id,
            PokemonType::where('name', '=', 'ghost')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 680,
            'name' => 'Doublade',
            'generation_id' => 6    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'steel')->first()->id,
            PokemonType::where('name', '=', 'ghost')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 681,
            'name' => 'Aegislash',
            'generation_id' => 6   
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'steel')->first()->id,
            PokemonType::where('name', '=', 'ghost')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 682,
            'name' => 'Spritzee',
            'generation_id' => 6   
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fairy')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 683,
            'name' => 'Aromatisse',
            'generation_id' => 6    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fairy')->first()->id
        ]);

        $pkmn->art()->create([
            'file' => 'art\2plEwZ3Cm13FlIRCqYZF12II9NefS0I8Su46ZJD3.png',
            'date' => '2023-11-15'
        ]);

        $pkmn = Pokemon::create([
            'number' => 739,
            'name' => 'Crabrawler',
            'generation_id' => 7   
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fighting')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 740,
            'name' => 'Crabominable',
            'generation_id' => 7      
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fighting')->first()->id,
            PokemonType::where('name', '=', 'ice')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 742,
            'name' => 'Cutiefly',
            'generation_id' => 7       
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'bug')->first()->id,
            PokemonType::where('name', '=', 'fairy')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 743,
            'name' => 'Ribombee',
            'generation_id' => 7       
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'bug')->first()->id,
            PokemonType::where('name', '=', 'fairy')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 827,
            'name' => 'Nickit',
            'generation_id' => 8    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'dark')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 828,
            'name' => 'Thievul',
            'generation_id' => 8  
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'dark')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 852,
            'name' => 'Clobbopus',
            'generation_id' => 8    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fighting')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 853,
            'name' => 'Grapploct',
            'generation_id' => 8    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'fighting')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 938,
            'name' => 'Tadbulb',
            'generation_id' => 9    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'electric')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 939,
            'name' => 'Bellibolt',
            'generation_id' => 9    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'electric')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 948,
            'name' => 'Toedscool',
            'generation_id' => 9    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'ground')->first()->id,
            PokemonType::where('name', '=', 'grass')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 949,
            'name' => 'Toedscruel',
            'generation_id' => 9    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'ground')->first()->id,
            PokemonType::where('name', '=', 'grass')->first()->id
        ]);

        $pkmn = Pokemon::create([
            'number' => 950,
            'name' => 'Klawf',
            'generation_id' => 9    
        ]);

        $pkmn->types()->attach([
            PokemonType::where('name', '=', 'rock')->first()->id
        ]);
    
    }
    
}

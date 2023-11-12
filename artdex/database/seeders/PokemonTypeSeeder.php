<?php

namespace Database\Seeders;

use App\Models\PokemonType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PokemonType::create([
            'name' => 'bug',
            'icon' => 'locust',
            'color1' => '#92BC2C',
            'color2' => '#92BC2C'
        ]);

        PokemonType::create([
            'name' => 'dark',
            'icon' => 'mask',
            'color1' => '#595761',
            'color2' => '#595761'
        ]);

        PokemonType::create([
            'name' => 'dragon',
            'icon' => 'dragon',
            'color1' => '#0C69C8',
            'color2' => '#0C69C8'
        ]);

        PokemonType::create([
            'name' => 'electric',
            'icon' => 'bolt-lightning',
            'color1' => '#F2D94E',
            'color2' => '#F2D94E'
        ]);

        PokemonType::create([
            'name' => 'fairy',
            'icon' => 'wand-sparkles',
            'color1' => '#EE90E6',
            'color2' => '#EE90E6'
        ]);

        PokemonType::create([
            'name' => 'fighting',
            'icon' => 'hand-fist',
            'color1' => '#D3425F',
            'color2' => '#D3425F'
        ]);

        PokemonType::create([
            'name' => 'fire',
            'icon' => 'fire',
            'color1' => '#FBA54C',
            'color2' => '#FBA54C'
        ]);

        PokemonType::create([
            'name' => 'flying',
            'icon' => 'feather',
            'color1' => '#A1BBEC',
            'color2' => '#A1BBEC'
        ]);

        PokemonType::create([
            'name' => 'ghost',
            'icon' => 'skull',
            'color1' => '#5F6DBC',
            'color2' => '#5F6DBC'
        ]);

        PokemonType::create([
            'name' => 'grass',
            'icon' => 'seedling',
            'color1' => '#5FBD58',
            'color2' => '#5FBD58'
        ]);

        PokemonType::create([
            'name' => 'ground',
            'icon' => 'mound',
            'color1' => '#DA7C4D',
            'color2' => '#DA7C4D'
        ]);

        PokemonType::create([
            'name' => 'ice',
            'icon' => 'snowflake',
            'color1' => '#75D0C1',
            'color2' => '#75D0C1'
        ]);

        PokemonType::create([
            'name' => 'normal',
            'icon' => 'circle-dot',
            'color1' => '#A0A29F',
            'color2' => '#A0A29F'
        ]);

        PokemonType::create([
            'name' => 'poison',
            'icon' => 'skull-crossbones',
            'color1' => '#B763CF',
            'color2' => '#B763CF'
        ]);

        PokemonType::create([
            'name' => 'psychic',
            'icon' => 'eye',
            'color1' => '#FA8581',
            'color2' => '#FA8581'
        ]);

        PokemonType::create([
            'name' => 'rock',
            'icon' => 'gem',
            'color1' => '#C9BB8A',
            'color2' => '#C9BB8A'
        ]);

        PokemonType::create([
            'name' => 'steel',
            'icon' => 'gears',
            'color1' => '#5695A3',
            'color2' => '#5695A3'
        ]);

        PokemonType::create([
            'name' => 'water',
            'icon' => 'droplet',
            'color1' => '#539DDF',
            'color2' => '#539DDF'
        ]);
    }
}

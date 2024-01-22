<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Type extends Model
{
    use HasFactory;

    public function type1Pokemon(): HasMany {
        return $this->hasMany(Pokemon::class, 'type1_id');
    }

    public function type2Pokemon(): HasMany {
        return $this->hasMany(Pokemon::class, 'type2_id');
    }

    protected function pokemonQuery() {
        return Pokemon::where('type1_id', '=', $this->id)->orWhere('type2_id', '=', $this->id);
    }

    public function getPokemon() {
        return $this->pokemonQuery()->get();
    }

}

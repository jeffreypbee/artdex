<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Type extends Model
{
    use HasFactory;

    public function pokemon(): MorphToMany {
        return $this->morphedByMany(Pokemon::class, 'typeable');
    }

    public function forms(): MorphToMany {
        return $this->morphedByMany(PokemonForm::class, 'typeable');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class PokemonType extends Model
{
    use HasFactory;

    public function pokemon(): BelongsToMany {
        return $this->belongsToMany(Pokemon::class);
    }
    
}

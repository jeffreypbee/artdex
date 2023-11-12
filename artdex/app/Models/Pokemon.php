<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pokemon extends Model
{
    use HasFactory;

    public function types(): BelongsToMany {
        return $this->belongsToMany(PokemonType::class)->orderByPivot('id', 'ASC');
    }
}

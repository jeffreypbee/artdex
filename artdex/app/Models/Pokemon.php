<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pokemon extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'name',
        'form'
    ];

    public function types(): BelongsToMany {
        return $this->belongsToMany(PokemonType::class)->orderByPivot('id', 'ASC');
    }

    public function art(): HasOne {
        return $this->hasOne(Art::class);
    }

    public static function pokedex() {
        return Pokemon::orderBy('number', 'ASC')->get();
    }
}

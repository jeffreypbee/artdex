<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class PokemonForm extends Model
{
    use HasFactory;

    public function pokemon(): BelongsTo {
        return $this->belongsTo(Pokemon::class);
    }

    public function type1(): BelongsTo {
        return $this->belongsTo(Type::class, 'type1_id');
    }

    public function type2(): BelongsTo {
        return $this->belongsTo(Type::class, 'type2_id');
    }

    public function art(): MorphMany {
        return $this->morphMany(Art::class, 'artable');
    }
}

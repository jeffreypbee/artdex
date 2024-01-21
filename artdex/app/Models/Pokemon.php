<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Pokemon extends Model
{
    use HasFactory;

    public function generation(): BelongsTo {
        return $this->belongsTo(Generation::class);
    }

    public function forms(): HasMany {
        return $this->hasMany(PokemonForm::class);
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

    public function getNumber(): string {
        return sprintf('%04d', $this->number);
    }

    public function hasArt(): bool {
        if ($this->art == null) {
            return false;
        }
        foreach ($this->art as $art) {
            if ($art->isPublished()) {
                return true;
            }
        }
        return false;
    }
}

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

    public function scopeHasType($query, $typeName) {
        $type = Type::where('name', '=', $typeName)->first();
        return $query->where('type1_id', '=', $type->id)->orWhere('type2_id', '=', $type->id);
    }

    public function scopeGeneration($query, $generation) {
        $gen = Generation::where('generation', '=', $generation)->first();
        return $query->where('generation_id', '=', $gen->id);
    }

    public function getNumber(): string {
        return sprintf('%04d', $this->number);
    }

    public function getTypes() {
        if ($this->type2 == null) {
            return ['type1' => $this->type1];
        }
        return [
            'type1' => $this->type1,
            'type2' => $this->type2
        ];
    }

    public function getColors() {
        if ($this->type2 == null) {
            return [$this->type1->color];
        }
        return [
            $this->type1->color,
            $this->type2->color
        ];
    }

    public function getDefaultForm() {
        return PokemonForm::where('pokemon_id', $this->id)->where('default', true)->first();
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

    public function next() {
        $max = Pokemon::all()->max('number');
        for ($n = $this->number + 1; $n <= $max; $n++) {
            $pokemon = Pokemon::where('number', '=', $n)->first();
            if ($pokemon != null) {
                return $pokemon;
            }
        }
        return null;
    }

    public function previous() {
        $min = Pokemon::all()->min('number');
        for ($n = $this->number - 1; $n >= $min; $n--) {
            $pokemon = Pokemon::where('number', '=', $n)->first();
            if ($pokemon != null) {
                return $pokemon;
            }
        }
        return null;
    }
}

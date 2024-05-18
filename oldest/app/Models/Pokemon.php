<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    public function generation(): BelongsTo {
        return $this->belongsTo(Generation::class);
    }

    public function art(): HasOne {
        return $this->hasOne(Art::class);
    }

    public function formattedNumber(): string {
        return sprintf('%04s', $this->number);
    }

    public function hasArt(): bool {
        if ($this->art != null) {
            $today = date('Y-m-d');
            if ($this->art->date === null) {
                return false;
            }
            if ($this->art->date <= $today) {
                return true;
            }
        }
        return false;
    }

    public static function pokedex() {
        return Pokemon::orderBy('number', 'ASC')->get();
    }
}

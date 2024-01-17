<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Form extends Model
{
    use HasFactory;

    public function pokemon(): BelongsTo {
        return $this->belongsTo(Pokemon::class);
    }

    public function types(): MorphToMany {
        return $this->morphToMany(Type::class, 'typeable')->withPivot('typeables')->orderBy('order', 'DESC');
    }

    public function art(): MorphMany {
        return $this->morphMany(Art::class, 'artable');
    }
}

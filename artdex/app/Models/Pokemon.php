<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Pokemon extends Model
{
    use HasFactory;

    public function forms(): HasMany {
        return $this->hasMany(Form::class);
    }

    public function types(): MorphToMany {
        return $this->morphToMany(Type::class, 'typeable')->withPivot('typeables')->orderBy('order', 'DESC');
    }
}

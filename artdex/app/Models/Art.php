<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Art extends Model
{
    use HasFactory;

    public function pokemon(): HasOne {
        return $this->hasOne(Pokemon::class);
    }
}

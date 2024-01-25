<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Art extends Model
{
    use HasFactory;

    public function artable(): MorphTo {
        return $this->morphTo();
    }

    public function scopePublished($query) {
        return $query->where('publish_date', '<', Carbon::now());
    }

    public function scopeUpcoming($query) {
        return $query->where('publish_date', '>', Carbon::now());
    }

    public function isPublished(): bool {
        return $this->publish_date < Carbon::now();
    }
}

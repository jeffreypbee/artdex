<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Art extends Model
{
    use HasFactory;

    protected $fillable =[
        'file',
        'date'
    ];

    public function pokemon(): BelongsTo {
        return $this->belongsTo(Pokemon::class);
    }

    public static function latest() {
        $today = date('Y-m-d');
        return Art::where('date', '<=', $today)->orderBy('date', 'DESC')->first();
    }

    public static function recent() {
        $today = date('Y-m-d');
        return Art::where('date', '<=', $today)->orderBy('date', 'DESC')->limit('6')->get();
    }
}

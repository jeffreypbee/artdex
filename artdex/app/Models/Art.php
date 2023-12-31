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

    public static function posted() {
        $today = date('Y-m-d');
        return Art::where('date', '<=', $today)->get();
    }

    public static function latest() {
        $today = date('Y-m-d');
        return Art::where('date', '<=', $today)->orderBy('date', 'DESC')->limit('12')->get();
    }

    public static function upcoming() {
        $today = date('Y-m-d');
        return Art::where('date', '>', $today)->orderBy('date', 'ASC')->get();
    }

    public static function unscheduled() {
        return Art::where('date', null)->get();
    }
}

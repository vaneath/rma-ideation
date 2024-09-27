<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'car_fuel',
        'car_type',
        'car_make',
        'car_model',
        'car_year',
        'car_color',
        'review_status',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('g:i a l jS F Y');
    }
}

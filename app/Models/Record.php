<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

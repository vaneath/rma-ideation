<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_url',
        'description',
        'type',
        'value',
        'point_cost',
        'quantity',
        'section_id',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}

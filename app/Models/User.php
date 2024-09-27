<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'age',
        'job_title',
        'phone_number',
        'email',
        'points',
        'password',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        return $this->role === 'admin';  // Assuming you have a 'role' field
    }

    public function records()
    {
        return $this->hasMany(Record::class);
    }

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function hasNullSpecificColumns()
    {
        $columns = ['age', 'gender', 'phone_number', 'job_title'];
        foreach ($columns as $column) {
            if (is_null($this->$column)) {
                return true;
            }
        }
        return false;
    }
}

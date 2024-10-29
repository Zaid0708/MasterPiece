<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'last_name', 
        'email', 
        'password', 
        'phone_number', 
        'role_id'
    ];

    protected $hidden = [
        'password', 
        'remember_token'
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function instructor()
    {
        return $this->hasOne(Instructor::class);
    }

    public function progress()
    {
        return $this->hasMany(Progress::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}

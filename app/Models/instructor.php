<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'bio', 
        'profile_picture',
        'expertise'
    ];

 public function user()
{
    return $this->belongsTo(User::class, 'user_id'); // Ensure 'user_id' is the correct foreign key
}


    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}

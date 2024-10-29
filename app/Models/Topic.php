<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'order','course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class); // Change to belongsTo
    }
    
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
    // In your Topic model
public function quizzes()
{
    return $this->hasMany(Quiz::class); // Adjust according to your Quiz model's name
}


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'description', 
        'price', 
        'category_id', 
        'instructor_id', 
        'thumbnail_img',
        'course_intro_video',
        'outcomes',
        'Materials',
        'certificate',
        'duration'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function topics()
    {
        return $this->hasMany(Topic::class); // Change to hasMany
    }
    

    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id'); // Ensure 'instructor_id' is the correct foreign key
    }
    

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function progress()
    {
        return $this->hasMany(Progress::class);
    }
    public function ratingCount()
{
    return $this->reviews()->count();
}
// In Course.php model

public function averageRating()
{
    return $this->reviews()->avg('rating'); // Calculates the average rating from the reviews
}

}

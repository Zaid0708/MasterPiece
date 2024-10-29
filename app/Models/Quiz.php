<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', // Add other relevant fields here
        'course_id', // If quizzes are linked to courses
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}

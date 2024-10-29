<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'user_id',
        'answer', // The selected option ID
        'is_correct', // Whether the user's answer is correct
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}


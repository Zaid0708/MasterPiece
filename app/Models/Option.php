<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'text', // The option text
        'is_correct', // A boolean to mark if this option is correct
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}


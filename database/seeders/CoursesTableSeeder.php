<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Course;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Option;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        // Create a sample quiz
        $quiz = Quiz::create([
            'title' => 'Laravel Basics Quiz',
            'topic_id' => 1, // Assuming topic ID 1 exists
        ]);

        // Create sample questions for the quiz
        $question1 = Question::create([
            'quiz_id' => $quiz->id,
            'text' => 'What is Laravel?',
        ]);

        $question2 = Question::create([
            'quiz_id' => $quiz->id,
            'text' => 'Which of the following is an Artisan command?',
        ]);

        // Create options for question 1
        Option::create([
            'question_id' => $question1->id,
            'text' => 'A PHP framework',
            'is_correct' => true, // Correct answer
        ]);

        Option::create([
            'question_id' => $question1->id,
            'text' => 'A JavaScript library',
            'is_correct' => false,
        ]);

        Option::create([
            'question_id' => $question1->id,
            'text' => 'A CSS framework',
            'is_correct' => false,
        ]);

        Option::create([
            'question_id' => $question1->id,
            'text' => 'A Python package',
            'is_correct' => false,
        ]);

        // Create options for question 2
        Option::create([
            'question_id' => $question2->id,
            'text' => 'npm install',
            'is_correct' => false,
        ]);

        Option::create([
            'question_id' => $question2->id,
            'text' => 'php artisan migrate',
            'is_correct' => true, // Correct answer
        ]);

        Option::create([
            'question_id' => $question2->id,
            'text' => 'git push origin master',
            'is_correct' => false,
        ]);

        Option::create([
            'question_id' => $question2->id,
            'text' => 'composer install',
            'is_correct' => false,
        ]);
    }
}

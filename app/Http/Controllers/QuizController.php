<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;
class QuizController extends Controller
{// app/Http/Controllers/QuizController.php
    public function show($quizId)
    {
        // Find the quiz by ID, including its questions and options
        $quiz = Quiz::with('questions.options')->findOrFail($quizId);
    
        // Return the view with the quiz data
        return view('user-pages.quiz', compact('quiz'));
    }
    

public function submit(Request $request, $quizId)
{
    $userId = auth()->id(); // Get the current authenticated user ID
    $quiz = Quiz::findOrFail($quizId); // Find the quiz
    $userAnswers = $request->input('answers'); // Get the user's answers from the form

    $correctAnswers = 0;

    foreach ($userAnswers as $questionId => $optionId) {
        $question = Question::findOrFail($questionId);
        $correctOption = $question->options->where('is_correct', true)->first();

        // Store the user's answer
        Answer::create([
            'question_id' => $questionId,
            'user_id' => $userId,
            'answer' => $optionId,
            'is_correct' => $correctOption->id == $optionId,
        ]);

        // Check if the answer is correct
        if ($correctOption->id == $optionId) {
            $correctAnswers++;
        }
    }

    // Calculate the score as a percentage
    $score = ($correctAnswers / count($quiz->questions)) * 100;

    return view('user-pages.quiz-result', compact('score'));
}

}

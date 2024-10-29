<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\Course;
use App\Models\Topic;
use App\Models\Lesson;

use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function myCourses()
    {
        $userId = Auth::id(); // Get the current logged-in user's ID
    
        // Fetch the enrolled courses for the logged-in user
        $enrollments = Enrollment::where('user_id', $userId)->get();
    
        // Collect the course IDs from enrollments
        $courseIds = $enrollments->pluck('course_id');
    
        // Fetch the courses using the collected course IDs and paginate them (6 per page)
        $courses = Course::whereIn('id', $courseIds)
                         ->with('instructor.user', 'category')
                         ->paginate(6);
    
        return view('user-pages.my-courses', compact('courses'));
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index($courseId)
    {
        // Retrieve topics along with their associated lessons and quizzes
        $topics = Topic::where('course_id', $courseId)
            ->with(['lessons', 'quizzes']) // Assuming a 'quizzes' relationship is defined
            ->get();
    
        return view('user-pages.lessons', compact('topics'));
    }
    
    
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

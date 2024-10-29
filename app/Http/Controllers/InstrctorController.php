<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Course;
use App\Models\Instructor;

class InstrctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();  // Get the authenticated user
        $instructor = $user->instructor;  // Assuming the user has an instructor profile
    
        if (!$instructor) {
            return redirect()->route('home')->with('error', 'Instructor not found');
        }
    
        // Retrieve courses related to this instructor along with enrollments and reviews
        $courses = $instructor->courses()->with('enrollments', 'reviews')->get();
    
        // Calculate total enrolled students (sum of all enrollments)
        $totalStudents = $courses->sum(function($course) {
            return $course->enrollments->count();
        });
    
        // Calculate total number of enrolled courses (courses with at least one enrollment)
        $enrolledCoursesCount = $courses->filter(function($course) {
            return $course->enrollments->count() > 0;
        })->count();
    
        // Total courses count
        $totalCourses = $courses->count();
    
        // Calculate total earnings (price * number of enrollments for each course)
        $totalEarnings = $courses->sum(function($course) {
            return $course->price * $course->enrollments->count();
        });
    
        return view('instructor-pages.instructor-dashboard', compact('courses', 'totalStudents', 'totalCourses', 'totalEarnings', 'enrolledCoursesCount'));
    }
    
    
    public function lay()
    {
        // Get the authenticated user
        $user = Auth::user();
    
        // Get the specific instructor related to the authenticated user
        $instructor = Instructor::where('user_id', $user->id)->first();
    
        // Pass both the user and the specific instructor data to the view
        return view('layout.instructorlayout', compact('user', 'instructor'));
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
    public function show()
    {
        $user = Auth::user();
    
        // Get the specific instructor related to the authenticated user
        $instructor = Instructor::where('user_id', $user->id)->first();
    
        // Pass both the user and the specific instructor data to the view
        return view('instructor-pages.instructor-profile', compact('user', 'instructor'));
    }
    public function showcourse()
    {
        $user = Auth::user();
    
        // Get the specific instructor related to the authenticated user
        $instructor = Instructor::where('user_id', $user->id)->first();
        $courses=Course::where('instructor_id',$instructor->id)->get();
    
        // Pass both the user and the specific instructor data to the view
        return view('instructor-pages.instructor-my-course', compact('courses'));
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

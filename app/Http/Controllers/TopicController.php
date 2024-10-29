<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Get the authenticated user
        $user = Auth::user();
    
        // Assuming a user has one instructor profile
        $instructor = $user->instructor; // Fetching the instructor associated with the user
    
        // Search functionality for filtering courses by title
        $search = $request->input('search');
    
        // Get the courses of the authenticated instructor
        $courses = Course::where('instructor_id', $instructor->id) // Use instructor's ID
                        ->when($search, function ($query, $search) {
                            return $query->where('title', 'like', "%{$search}%");
                        })
                        ->with('topics') // Load topics for each course
                        ->get();
    
        return view('instructor-pages.instructor-my-topics', compact('courses', 'search'));
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

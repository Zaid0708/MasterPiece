<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Review;
use App\Models\Topic;
use Illuminate\Support\Facades\Auth;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function storeReview(Request $request, string $courseId)
    {
        // Validate the request
        $request->validate([
            'rating' => 'required',
            'comment' => 'required',
        ]);

        // Create the review
        Review::create([
            'course_id' => $courseId,
            'user_id' => Auth::id(), // Get the ID of the authenticated user
            'rating' => $request->input('rating'),
            'comment' => $request->input('comment'),
        ]);

        // Redirect back to the course details page with a success message
        return redirect()->route('course.details', $courseId)->with('success', 'Review submitted successfully!');
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
    public function show(string $courseId)
    {
        $course = Course::findOrFail($courseId);
        $topics = Topic::where('course_id', $courseId)->get();
    
        // Get the first two reviews
        $reviews = Review::where('course_id', $courseId)
                        ->take(2)
                        ->orderBy('created_at', 'desc')
                        ->get();
        
        // Get all reviews for statistics
        $allReviews = Review::where('course_id', $courseId)->get();
    
        // Calculate average rating and total reviews
        $averageRating = $allReviews->avg('rating'); // Calculate average rating
        $totalReviews = $allReviews->count(); // Get total number of reviews
    
        // Get count of each rating for statistics
        $ratingCounts = $allReviews->groupBy('rating')->map(function ($item) {
            return $item->count();
        });
    
        return view('user-pages.course-details-2', compact('course', 'reviews', 'topics', 'averageRating', 'totalReviews', 'ratingCounts'));
    }
    
   
    
    public function loadMoreReviews(Request $request)
    {
        $courseId = $request->input('course_id'); // Get course_id from the query parameters
        $skip = $request->input('skip', 0); // Default to 0 if not provided
    
        $reviews = Review::where('course_id', $courseId)
                        ->with('user') // Eager load the user relationship
                        ->skip($skip)
                        ->take(2)
                        ->orderBy('created_at', 'desc')
                        ->get();
        
        return response()->json($reviews);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Instructor;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  
     public function index()
     {
         // Get the authenticated user
         $user = Auth::user();
     
         // Check if a user is authenticated
         if ($user) {
             // Get the specific instructor related to the authenticated user
             $instructor = Instructor::where('user_id', $user->id)->first();
     
             // Fetch all courses to calculate their average ratings and find the top-rated course
             $courses = Course::with('reviews') // Eager load reviews
                 ->get() // Fetch all courses
                 ->map(function ($course) {
                     $course->average_rating = $course->averageRating(); // Add average rating to each course
                     $course->review_count = $course->reviews()->count(); // Add review count to each course
                     return $course;
                 });
     
             // Get the top-rated course
             $topRatedCourse = $courses->sortByDesc('average_rating')->first();
     
             // Get only 6 courses (or less based on the sorting)
             $courses = $courses->sortByDesc('average_rating')->take(6);
     
             // Pass the user, instructor, courses, and top-rated course data to the view
             return view('user-pages.index', compact('user', 'instructor', 'courses', 'topRatedCourse'));
         } else {
             // If no user is authenticated, fetch all courses and the top-rated course
             $courses = Course::with('reviews') // Eager load reviews
                 ->get() // Fetch all courses
                 ->map(function ($course) {
                     $course->average_rating = $course->averageRating(); // Add average rating to each course
                     $course->review_count = $course->reviews()->count(); // Add review count to each course
                     return $course;
                 });
     
             // Get the top-rated course
             $topRatedCourse = $courses->sortByDesc('average_rating')->first();
     
             // Get only 6 courses (or less based on the sorting)
             $courses = $courses->sortByDesc('average_rating')->take(6);
     
             // Return view with null values for user and instructor, and pass the top-rated course
             return view('user-pages.index', ['user' => null, 'instructor' => null, 'courses' => $courses, 'topRatedCourse' => $topRatedCourse]);
         }
     }
     
     public function category(Request $request)
     {
         // Get the authenticated user
         $user = Auth::user();
         $selectedCategories = $request->input('category');
         $priceFilter = $request->input('price_filter');
         $selectedLanguages = $request->input('languages', []);
     
         // Get search query and sorting from the request
         $query = $request->input('query');
         $sort = $request->input('sort');
         $categories = Category::all();
     
         // Fetch distinct languages from the courses table
         $languages = Course::select('language')->distinct()->get();
         
         // Base query for courses
         $coursesQuery = Course::with(['reviews', 'instructor.user', 'category'])
             ->withCount('reviews')
             ->withAvg('reviews', 'rating')
             ->selectRaw('courses.*, CASE 
                 WHEN discount IS NOT NULL AND discount > 0 THEN price - (price * discount / 100)
                 ELSE price 
                 END as effective_price');
     
         // Apply search filter
         if ($query) {
             $coursesQuery->where('title', 'LIKE', '%' . $query . '%')
                          ->orWhere('description', 'LIKE', '%' . $query . '%');
         }
     
         // Apply category filter
         if ($selectedCategories) {
             $coursesQuery->whereIn('category_id', $selectedCategories);
         }
         
         // Apply price filter
         if ($priceFilter) {
             if ($priceFilter == 'free') {
                 $coursesQuery->where('price', 0);
             } elseif ($priceFilter == 'paid') {
                 $coursesQuery->where('price', '>', 0);
             }
         }
     
         // Apply language filter
         if (!empty($selectedLanguages)) {
             $coursesQuery->whereIn('language', $selectedLanguages);
         }
         
         // Apply sorting
         switch ($sort) {
             case 'popularity':
                 $coursesQuery->orderBy('reviews_count', 'desc');
                 break;
             case 'latest':
                 $coursesQuery->orderBy('created_at', 'desc');
                 break;
             case 'price_low_high':
                 $coursesQuery->orderBy('effective_price', 'asc');
                 break;
             case 'price_high_low':
                 $coursesQuery->orderBy('effective_price', 'desc');
                 break;
             default:
                 $coursesQuery->orderBy('title', 'asc');
                 break;
         }
     
         // Get paginated courses
         $courses = $coursesQuery->paginate(9);
     
         return view('user-pages.course-with-sidebar', compact('user', 'courses', 'sort', 'categories', 'selectedCategories', 'priceFilter', 'selectedLanguages', 'languages'));
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

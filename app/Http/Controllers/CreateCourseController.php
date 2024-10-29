<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
Use App\Models\Course;
Use App\Models\Instructor;
Use App\Models\Topic;
Use App\Models\lesson;
use Illuminate\Support\Facades\Auth;
class CreateCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        return view('instructor-pages.instructor-create-new-course',compact('categories'));
    }
    public function topic()
    {
        $courses=Course::all();
        return view('instructor-pages.instructor-create-topic',compact('courses'));
    }

    public function lesson(String $courseid)
    {
        $course=course::where('id',$courseid)->first();
        
        $topics=topic::where('course_id',$courseid)->get();
        return view('instructor-pages.instructor-create-lesson',compact('topics','course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function storetopic(Request $request)
    {
        $validatedData = $request->validate([
            'topictitle' => 'required|string|max:255',
            'topicorder' => 'required|integer', // Ensure this is an integer if it's an order field
            'course_id' => 'required|exists:courses,id',
        ]);
    
        $topic = new Topic;
        $topic->title = $validatedData['topictitle'];
        $topic->order = $validatedData['topicorder'];
        $topic->course_id = $validatedData['course_id'];
        $topic->save();
    
        return redirect()->route('instructor-dashboard')->with('success', 'Topic created successfully!');
    }
    
    public function storeLesson(Request $request)
    {
        $validatedData = $request->validate([
            'lesson_title' => 'required|string|max:255',
            'lesson_content' => 'required|string',
            'lesson_order' => 'required|integer',
            'topic_id' => 'required|exists:topics,id',
            'course_id' => 'required|exists:courses,id', // Validate course_id
            'lesson_video' => 'required|file|mimes:mp4,mov,ogg,qt|max:20480', // Max 20MB
        ]);
    
        // Create a new lesson
        $lesson = new Lesson();
        $lesson->title = $validatedData['lesson_title'];
        $lesson->content = $validatedData['lesson_content'];
        $lesson->order = $validatedData['lesson_order'];
        $lesson->topic_id = $validatedData['topic_id'];
        $lesson->course_id = $validatedData['course_id']; // Set course_id
    
        // Handle file upload
        if ($request->hasFile('lesson_video')) {
            $file = $validatedData['lesson_video'];
            $filePath = $file->store('lesson_videos', 'public'); // Stores in storage/app/public/lesson_videos
            $lesson->video = $filePath;
        }
    
        $lesson->save();
    
        return redirect()->route('instructor-dashboard')->with('success', 'Lesson uploaded successfully!');
    }
    
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'outcomes' => 'required|string',
        'materials' => 'required|string',
        'description' => 'required|string',
        'category_id' => 'required|exists:categories,id',
        'price' => 'required|numeric',
        'duration_hours' => 'required|numeric|min:0',
        'duration_minutes' => 'required|numeric|min:0',
        'certificate' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'course_intro_video' => 'required|file|mimes:mp4,avi,mov,wmv|max:20480',
    ]);
    
    $user = Auth::user();

    // Assuming there's an Instructor model that relates to the User model
    $instructor = Instructor::where('user_id', $user->id)->first();

    // Check if the instructor exists
    if (!$instructor) {
        return redirect()->back()->withErrors(['error' => 'Instructor not found.']);
    }

    // Create and save a new course
    $course = new Course;
    $course->title = $validatedData['title'];
    $course->outcomes = $validatedData['outcomes'];
    $course->materials = $validatedData['materials'];
    $course->description = $validatedData['description'];
    $course->category_id = $validatedData['category_id'];  // Setting category
    $course->instructor_id = $instructor->id;  // Set the instructor_id to the instructor's ID
    $course->price = $validatedData['price'];
    $course->duration = ($validatedData['duration_hours'] * 60) + $validatedData['duration_minutes'];
    
    // Handle file upload for the certificate
    if ($request->hasFile('certificate')) {
        $file = $request->file('certificate');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('certificates', $filename, 'public'); // Store in the 'public/certificates' directory
        $course->certificate = 'certificates/' . $filename; // Save the path
    }
    
    // Handle file upload for the thumbnail
    if ($request->hasFile('thumbnail')) {
        $thumbnailFile = $request->file('thumbnail');
        $thumbnailFilename = time() . '_thumbnail_' . $thumbnailFile->getClientOriginalName();
        $thumbnailFile->storeAs('thumbnails', $thumbnailFilename, 'public'); // Store in the 'public/thumbnails' directory
        $course->thumbnail_img = 'thumbnails/' . $thumbnailFilename; // Save the path
    }

    // Handle file upload for the course intro video
    if ($request->hasFile('course_intro_video')) {
        $videoFile = $request->file('course_intro_video');
        $videoFilename = time() . '_video_' . $videoFile->getClientOriginalName();
        $videoFile->storeAs('videos', $videoFilename, 'public'); // Store in the 'public/videos' directory
        $course->course_intro_video = 'videos/' . $videoFilename; // Save the path
    }

    $course->save(); // Save the course to the database
    
    // Redirect to course list with a success message
    return redirect()->route('instructor-dashboard')->with('success', 'Course created successfully!');
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

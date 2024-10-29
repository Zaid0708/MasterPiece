<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth facade
use App\Models\Enrollment; 
class CheckoutController extends Controller
{
 

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::check()) {
            // Redirect to login with a message
            return redirect()->route('login.form')->with('message', 'Please Login to access the checkout page.');
        }
        $user = Auth::user(); // Get the logged-in user
        return view('user-pages.checkout', compact('user'));
    }

    // Other methods remain unchanged
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Get the user ID from the authenticated user
        $userId = Auth::id();
    
        // Get the course IDs from the session
        $courseIds = session()->get('cart', []); // Adjust this if you're using a different session key
    
        // Check if there are any courses in the cart
        if (empty($courseIds)) {
            return redirect()->back()->with('message', 'No courses to enroll in.');
        }
    
        // Enroll the user in each course
        foreach ($courseIds as $courseId => $details) {
            Enrollment::create([
                'user_id' => $userId,
                'course_id' => $courseId,
                'enrolled_at' => now(), // Automatically set the current timestamp
            ]);
        }
    
        // Clear the cart session after enrollment (optional)
        session()->forget('cart');
    
        // Redirect back with a success message
        return redirect()->route('checkout.index')->with('message', 'Successfully enrolled in the selected courses!');
    }
    
    

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}

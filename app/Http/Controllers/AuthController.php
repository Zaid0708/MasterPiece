<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Instructor;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    // Show the registration form
    public function user_showRegister()
    {
        return view('user-pages.register'); // Adjust this path if your view is in a different location
    }

    // Handle the registration
    public function user_register(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed|min:8',
            'phone_number' => 'required|string|max:20',
        ]);

        // Create the new user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'phone_number' => $validated['phone_number'],
            'role_id' => 3, // Default role_id set to 3
        ]);

        // Log the user in
        Auth::login($user);

        // Redirect to a different page or return a success response
        return redirect()->route('home')->with('success', 'Registration successful!');
    }


    public function instructor_showRegister()
    {
        return view('instructor-pages.become-instructor'); // Adjust this path if your view is in a different location
    }

    // Handle the registration
 
public function instructor_register(Request $request)
{
    // Validate the incoming request data, including the picture
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|confirmed|min:8',
        'phone_number' => 'required|string|max:20',
        'bio' => 'required|string|max:255',
        'expertise' => 'required|string|max:255',
        'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the image file
    ]);

    // Handle the profile picture upload
    if ($request->hasFile('profile_picture')) {
        // Store the file in the 'public/profile_pictures' directory
        $picturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
    }

    // Create the new user
    $user = User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
        'phone_number' => $validated['phone_number'],
        'role_id' => 2, // Assuming 2 is the role_id for instructors
    ]);

    // Create the instructor profile
    $instructor = Instructor::create([
        'user_id' => $user->id, // Correctly reference the user's ID
        'bio' => $validated['bio'],
        'expertise' => $validated['expertise'],
        'profile_picture' => $picturePath ?? null, // Store the picture path, default to null if no picture
    ]);

    // Log the user in
    Auth::login($user);

    // Redirect to a different page or return a success response
    return redirect()->route('home')->with('success', 'Registration successful!');
}

    // Show the login form
    public function showLogin()
    {
        return view('login'); // Adjust this path if your view is in a different location
    }

    // Handle the login
    public function login(Request $request)
    {
        // Validate the incoming request data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);
    
        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Regenerate session to prevent session fixation attacks
            $request->session()->regenerate();
            
            // Authentication passed, check the user's role
            $user = Auth::user();
    
            // Redirect based on role
            switch ($user->role_id) {
                case 1:
                    // Admin role, redirect to admin dashboard
                    return redirect()->route('admin.dashboard')->with('success', 'You are logged in as an Admin!');
                case 2:
                    // Owner role, redirect to owner dashboard or page
                    return redirect()->route('instructor-dashboard')->with('success', 'You are logged in as an Owner!');
                case 3:
                    // Renter role, redirect to renter dashboard or page
                    return redirect()->route('home')->with('success', 'You are logged in as a Renter!');
                default:
                    // Default case if no specific role is found
                    return redirect()->route('home')->with('success', 'You are logged in!');
            }
        }
    
        // Authentication failed, throttle login attempts
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('email'));
    }
    
    // Log the user out
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login.form')->with('success', 'You have been logged out!');
    }


}



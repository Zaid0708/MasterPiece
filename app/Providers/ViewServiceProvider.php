<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category; // Import your Category model
use Illuminate\Support\Facades\Auth;
use App\Models\Instructor;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // View Composer for layout.app
        View::composer('layout.app', function ($view) {
            // Retrieve all categories
            $categories = Category::all();
            // Get the authenticated user (if any)
            $user = Auth::user();
            // Initialize instructor as null
            $instructor = null;
            // Check if the user is authenticated
            if ($user) {
                // Get the specific instructor related to the authenticated user
                $instructor = Instructor::where('user_id', $user->id)->first();
            }
            // Share categories and instructor (if authenticated) with the view
            $view->with([
                'categories' => $categories,
                'instructor' => $instructor,
            ]);
        });

        // View Composer for layout.instructorlayout
        View::composer('layout.instructorlayout', function ($view) {
            // Retrieve all categories
            $categories = Category::all();
            // Get the authenticated user (if any)
            $user = Auth::user();
            // Initialize instructor as null
            $instructor = null;
            // Check if the user is authenticated
            if ($user) {
                // Get the specific instructor related to the authenticated user
                $instructor = Instructor::where('user_id', $user->id)->first();
                
            }
            // Share categories and instructor (if authenticated) with the view
            $view->with([
                'categories' => $categories,
                'instructor' => $instructor,
                'user'=>$user,
            ]);
        });
    }

    public function register()
    {
        //
    }
}

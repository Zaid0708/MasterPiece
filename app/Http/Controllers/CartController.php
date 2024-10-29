<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CartController extends Controller
{
    // Method to add a course to the cart
    public function addToCart(Request $request)
    {
        $courseId = $request->course_id;
        $course = Course::find($courseId);

        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        $cart = session()->get('cart', []);

        // Check if the course is already in the cart
        if (isset($cart[$courseId])) {
            return response()->json([
                'message' => 'This course is already in your cart!',
                'cart_content' => view('partials.cart-mini', ['cart' => $cart])->render()
            ], 409); // 409 Conflict status
        }

        // Add the course to the cart
        $cart[$courseId] = [
            "id" => $course->id, // Add the course ID
            "title" => $course->title,
            "price" => $course->price,
            "quantity" => 1, // Set quantity to 1 for each course
            "discount" => $course->discount, // Set quantity to 1 for each course

            "thumbnail_img" => $course->thumbnail_img
        ];

        session()->put('cart', $cart);

        // Calculate the subtotal
        $subtotal = 0;
        foreach ($cart as $details) {
            $subtotal += $details['price'] * $details['quantity'];
        }

        // Return updated cart content
        return response()->json([
            'message' => 'Course added to cart successfully!',
            'cart_content' => view('partials.cart-mini', ['cart' => $cart])->render(),
            'cart_count' => count($cart), // Updated cart count
            'subtotal' => $subtotal // Return the subtotal
        ]);
    }

    // Method to remove a course from the cart
    public function removeFromCart(Request $request)
    {
        // Get the course ID from the request
        $courseId = $request->course_id;
    
        // Get the current cart from the session
        $cart = session()->get('cart', []);
    
        // Check if the course exists in the cart
        if (isset($cart[$courseId])) {
            // Remove the course from the cart
            unset($cart[$courseId]);
    
            // Update the cart in the session
            session()->put('cart', $cart);
        }
    
        // Calculate the new subtotal after removing the item
        $subtotal = array_reduce($cart, function ($sum, $item) {
            return $sum + ($item['price'] * $item['quantity']);
        }, 0);
    
        // If the cart is empty, return a specific empty cart view
        if (empty($cart)) {
            return response()->json([
                'cart_content' => view('partials.cart-mini')->render(), // Render an empty cart view
                'subtotal' => $subtotal, // Subtotal is 0 if cart is empty
                'cart_count' => 0  // Set cart count to 0
            ]);
        }
    
        // Return the updated cart content and cart count
        return response()->json([
            'cart_content' => view('partials.cart-mini', ['cart' => $cart])->render(), // Render the mini cart view
            'subtotal' => $subtotal, // Updated subtotal
            'cart_count' => count($cart) // Updated cart count
        ]);
    }
    
    
    
}

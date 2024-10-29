<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CreateCourseController;
use App\Http\Controllers\InstrctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\QuizController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/info',function(){
    return view('phpinfo');
});





Route::get('/cart',function(){
    return view('user-pages.cart');
})->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');




Route::get('/course-details/{courseId}', [CourseController::class, 'show'])->name('course.details');

Route::post('/course-details/{courseId}/reviews', [CourseController::class, 'storeReview'])->name('reviews.store');

Route::get('/index', [HomeController::class, 'index'])->name('home');
Route::get('/category', [HomeController::class, 'category'])->name('category');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/lesson/{courseId}', [LessonController::class, 'index'])->name('lesson');
Route::get('/my-courses', [LessonController::class, 'myCourses'])->name('my-courses');
// In web.php
Route::get('/load-more-reviews', [CourseController::class, 'loadMoreReviews'])->name('load.more.reviews');


Route::get('/quizzes/{quizId}', [QuizController::class, 'show'])->name('quizzes.show');
Route::post('/quiz/{quiz}/submit', [QuizController::class, 'submit'])->name('quiz.submit');


// Routes accessible only to instructors (role_id = 2)
Route::group(['middleware' => ['role:2']], function () {
    Route::get('/instuctor-dashboard', [InstrctorController::class, 'index'])->name('instructor-dashboard');
    Route::get('instuctor-lay', [InstrctorController::class, 'lay'])->name('instructor-lay');
    Route::get('instuctor-profile', [InstrctorController::class, 'show'])->name('instructor-profile');
    Route::get('instuctor-courses', [InstrctorController::class, 'showcourse'])->name('instructor-courses');
    Route::get('/create-course', [CreateCourseController::class, 'index']);
    Route::get('/create-topic', [CreateCourseController::class, 'topic'])->name('topic-form');
    Route::get('/create-lesson/{courseid}', [CreateCourseController::class, 'lesson'])->name('show-lesson');
    Route::post('/create-course', [CreateCourseController::class, 'store'])->name('create-course');
    Route::post('/create-topic', [CreateCourseController::class, 'storetopic'])->name('create-topic');
    Route::post('/create-lesson', [CreateCourseController::class, 'storelesson'])->name('create-lesson');
    Route::get('/instructor/topics', [TopicController::class, 'index'])->name('instructor.topics');

});

// Route to show the instructor registration form
Route::get('/become-instructor', [AuthController::class, 'instructor_showRegister'])->name('become.instructor');

// Route to handle the instructor registration form submission
Route::post('/instructor-register', [AuthController::class, 'instructor_register'])->name('instructor.register');

// Routes accessible only to general users (role_id = 3)
Route::group(['middleware' => ['role:3']], function () {

});
Route::get('/user-register', [AuthController::class, 'user_showRegister'])->name('register');
Route::post('/user-registered', [AuthController::class, 'user_register'])->name('form.register');
// Authentication routes (accessible to anyone)
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
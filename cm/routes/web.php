<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserController;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // Check user logged in
    if (Auth::check()) {
        return redirect('/home');
    }

    // get all courses
    $courses = DB::select("select * from courses");

    return view('home', ["courses" => $courses]);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/profile', [UserController::class, 'index']);
Route::get('/remove-course/{name}', [UserController::class, 'removeCourse']);
Route::post('/my-courses/searchCourse', [UserController::class, 'searchCourse']);
Route::match(["GET", "POST"], "/my-courses", [UserController::class, 'myCourses']);
Route::match(["GET", 'PUT'], '/edit', [UserController::class, 'edit']);

// Admin 
Route::middleware(["auth", "isAdmin"])->group(function () {
    // Course management
    Route::get('/dashboard', [AdminController::class, "index"]);
    Route::post('/courses/searchCourse', [AdminController::class, "searchCourse"]);
    Route::get("/courses", [AdminController::class, "showCourse"]);
    Route::get("/course/{id}", [AdminController::class, "deleteCourse"]);
    Route::match(["GET", "POST"], "/add-course", [AdminController::class, "addCourse"]);
    Route::match(["GET", "PUT"], "/edit-course/{id}", [AdminController::class, "editCourse"]);

    // User management
    Route::post('/users/searchUser', [AdminController::class, "searchUser"]);
    Route::get("/users", [AdminController::class, "showUser"]);
    Route::get("/user/{id}", [AdminController::class, "deleteUser"]);
    Route::match(["GET", "PUT"], "/edit-user/{id}", [AdminController::class, "editUser"]);
});

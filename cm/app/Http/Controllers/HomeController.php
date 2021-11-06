<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use PHPUnit\Framework\Constraint\Count;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = Course::all();
        $arr = [];
        $user = User::find(Auth::user()->id);
        foreach ($user->courses as $course) {
            array_push($arr, $course->id);
        }
        $countRegister = Course::withCount("users")->orderBy('users_count', 'desc')->get();

        return view('welcome', ["courses" => $courses, "users" => $arr, "count" => $countRegister]);
    }
}

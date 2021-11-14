<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use PHPUnit\Framework\Constraint\Count;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $courses = DB::select('select * from courses');
        $arr = [];
        $id = Auth::user()->id;
        $user = DB::select("select * from users where id = $id")[0];

        $query = "
            select course_user.course_id from course_user 
            INNER JOIN users 
            on course_user.user_id = users.id where users.id = $id;  
        ";
        $newArr = DB::select($query);
        foreach ($newArr as $key => $value) {
            array_push($arr, $value->course_id);
        }
        $countRegister = Course::withCount("users")->orderBy('users_count', 'desc')->get();

        return view('welcome', ["courses" => $courses, "users" => $arr, "count" => $countRegister]);
    }
}

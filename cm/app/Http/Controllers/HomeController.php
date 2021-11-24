<?php

namespace App\Http\Controllers;

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

        // get all courses id that user registered
        $query = "
            select course_user.course_id from course_user 
            INNER JOIN users 
            on course_user.user_id = users.id where users.id = $id;  
        ";

        $newArr = DB::select($query);
        foreach ($newArr as $key => $value) {
            array_push($arr, $value->course_id);
        }

        // Count the number of people who register for each course
        $query = "
        select courses.id, count(course_id) as count from courses 
        left join course_user on courses.id = course_user.course_id
        group by courses.id 
        ";

        $countRegister = DB::select($query);

        return view('welcome', ["courses" => $courses, "users" => $arr, "count" => $countRegister]);
    }
}

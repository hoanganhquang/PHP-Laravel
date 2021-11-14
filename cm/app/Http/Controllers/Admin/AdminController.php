<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // dashboard home page 
    public function index()
    {
        $user = Auth::user();

        $courses = DB::select('select count(*) as courses from courses')[0]->courses;
        $users = DB::select('select count(*) as users from users')[0]->users;

        return view("admin.index", ["user" => $user, "courses" => $courses, "users" => $users]);
    }

    // dashboard page all courses 
    public function showCourse()
    {
        $courses = DB::select('select * from courses');

        return view("admin.courses.index", ["courses" => $courses]);
    }

    // dashboard page add course
    public function addCourse(Request $request)
    {
        if ($request->isMethod("POST")) {
            $image = "";
            if ($request->hasFile('image')) {
                $file = $request->file("image");
                $ext = $file->getClientOriginalName();
                $file->move('assets/uploads/courses', $ext);
                $image = $ext;
            }

            $name = $request->input("name");
            $description = $request->input("description");

            DB::insert("insert into courses(name, description, image) values ('$name', '$description', '$image')");
        }
        return view("admin.courses.add");
    }

    // dashboard page edit course
    public function editCourse(Request $request, $id)
    {
        $course = DB::select("select * from courses where id = $id ")[0];

        if ($request->isMethod("PUT")) {
            $image = $course->image;
            if ($request->hasFile('image')) {
                $file = $request->file("image");
                $ext = $file->getClientOriginalName();
                $file->move('assets/uploads/courses', $ext);
                $image = $ext;
            }

            $name = $request->input("name");
            $description = $request->input("description");

            DB::update("update courses set name = '$name', description = '$description', image = '$image' where id=$id");
            return redirect("/courses");
        }

        return view("admin.courses.edit", ["course" => $course]);
    }

    // delete course
    public function deleteCourse($id)
    {
        DB::delete("delete from courses where id = $id");

        return redirect("/courses");
    }

    // dashboard page all users
    public function showUser()
    {
        $users = DB::select("select * from users");

        return view("admin.users.index", ["users" => $users]);
    }

    // dashboard page edit users
    public function edituser(Request $request, $id)
    {
        $user = DB::select("select * from users where id = $id ")[0];

        if ($request->isMethod("PUT")) {
            $image = $user->image;
            if ($request->hasFile('image')) {
                $file = $request->file("image");
                $ext = $file->getClientOriginalName();
                $file->move('assets/uploads/users', $ext);
                $image = $ext;
            }

            $name = $request->input("name");
            $email = $request->input("email");

            $password = Hash::make($request->input("password"));;

            DB::update("update users set name = '$name', email = '$email', password = '$password', image = '$image' where id=$id");

            return redirect("/users");
        }

        return view("admin.users.edit", ["user" => $user]);
    }

    // delete user
    public function deleteUser($id)
    {
        DB::delete("delete from users where id = $id");

        return redirect("/users");
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // admin dashboard main 
    public function index()
    {
        $user = Auth::user();

        // course statistics
        $courses = DB::select('select count(*) as courses from courses')[0]->courses;

        // user statistics
        $users = DB::select('select count(*) as users from users')[0]->users;

        return view("admin.index", ["user" => $user, "courses" => $courses, "users" => $users]);
    }

    // admin dashboard all courses 
    public function showCourse()
    {
        // get all courses
        $courses = DB::select('select * from courses');

        return view("admin.courses.index", ["courses" => $courses]);
    }

    // admin dashboard add course 
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

            // create new course
            DB::insert("insert into courses(name, description, image) values ('$name', '$description', '$image')");
        }

        return view("admin.courses.add");
    }

    // admin dashboard edit course
    public function editCourse(Request $request, $id)
    {
        // get course by id
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

            // update course by id
            DB::update("update courses set name = '$name', description = '$description', image = '$image' where id=$id");
            return redirect("/courses");
        }

        return view("admin.courses.edit", ["course" => $course]);
    }

    // fullTextSearch course
    public function searchCourse()
    {
        $name = $_POST["name"];

        if ($name == "" || $name == " ") {
            return redirect("/courses");
        }

        // fullTextSearch by searchCourse procedure
        $query = "call searchCourse('$name')";

        $courses = DB::select($query);

        return view("admin.courses.index", ["courses" => $courses]);
    }

    // delete course
    public function deleteCourse($id)
    {
        // delete course by id
        DB::delete("delete from courses where id = $id");

        return redirect("/courses");
    }

    // dashboard page all users
    public function showUser()
    {
        // get all users
        $users = DB::select("select * from users");

        return view("admin.users.index", ["users" => $users]);
    }

    // dashboard page edit users
    public function edituser(Request $request, $id)
    {
        // get user by id
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

            // update user by id
            DB::update("update users set name = '$name', email = '$email', password = '$password', image = '$image' where id=$id");

            return redirect("/users");
        }

        return view("admin.users.edit", ["user" => $user]);
    }

    // fullTextSearch user
    public function searchUser()
    {
        $name = $_POST["name"];

        if ($name == "") {
            return redirect("/users");
        }

        // fullTextSearch by searchUser procedure
        $query = "call searchUser('$name')";

        $users = DB::select($query);

        return view("admin.users.index", ["users" => $users]);
    }

    // delete user
    public function deleteUser($id)
    {
        // delete user by id
        DB::delete("delete from users where id = $id");

        return redirect("/users");
    }
}

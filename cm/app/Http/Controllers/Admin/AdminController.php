<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $courses = Course::all()->count();
        $users = User::all()->count();
        return view("admin.index", ["user" => $user, "courses" => $courses, "users" => $users]);
    }

    public function showCourse()
    {
        $courses = Course::all();
        return view("admin.courses.index", ["courses" => $courses]);
    }

    public function addCourse(Request $request)
    {
        if ($request->isMethod("POST")) {
            $course = new Course();

            if ($request->hasFile('image')) {
                $file = $request->file("image");
                $ext = $file->getClientOriginalName();
                $file->move('assets/uploads/courses', $ext);
                $course->image = $ext;
            }

            $course->name = $request->input("name");
            $course->description = $request->input("description");

            $course->save();
        }
        return view("admin.courses.add");
    }

    public function editCourse(Request $request, $id)
    {
        $course = Course::find($id);

        if ($request->isMethod("PUT")) {

            if ($request->hasFile('image')) {
                $file = $request->file("image");
                $ext = $file->getClientOriginalName();
                $file->move('assets/uploads/courses', $ext);
                $course->image = $ext;
            }

            $course->name = $request->input("name");
            $course->description = $request->input("description");

            $course->save();

            return redirect("/courses");
        }

        return view("admin.courses.edit", ["course" => $course]);
    }

    public function deleteCourse($id)
    {
        Course::destroy($id);

        return redirect("/courses");
    }

    // Users
    public function showUser()
    {
        $users = User::all();
        return view("admin.users.index", ["users" => $users]);
    }

    public function edituser(Request $request, $id)
    {
        $user = User::find($id);

        if ($request->isMethod("PUT")) {

            if ($request->hasFile('image')) {
                $file = $request->file("image");
                $ext = $file->getClientOriginalName();
                $file->move('assets/uploads/users', $ext);
                $user->image = $ext;
            }

            $user->name = $request->input("name");
            $user->email = $request->input("email");

            $user->password = Hash::make($request->input("password"));;

            $user->save();

            return redirect("/users");
        }

        return view("admin.users.edit", ["user" => $user]);
    }

    public function deleteUser($id)
    {
        User::destroy($id);

        return redirect("/users");
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // public function index(){

    // }
    public function index()
    {
        $user_id = Auth::user()->id;
        $countCourse = User::where('id', '=', $user_id)->withCount('courses')->get();

        return view("users.index", ['count' => $countCourse]);
    }

    public function myCourses(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if ($request->isMethod("POST")) {
            $user->courses()->attach($request->input('courseId'));
            return redirect("/my-courses");
        }

        return view("users.courses.index", ["users" => $user]);
    }

    public function removeCourse($name)
    {
        $user = User::find(Auth::user()->id);
        $course_id = Course::where('name', $name)->first()->id;
        $user->courses()->detach($course_id);

        return redirect("/my-courses");
    }

    public function edit(Request $request)
    {
        if ($request->isMethod("PUT")) {
            $user = Auth::user();
            $user = User::find($user->id);

            if ($request->input("name")) {
                $user->name = $request->input("name");
                $user->email = $request->input("email");

                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $ext = $file->getClientOriginalName();
                    $file->move('assets/uploads/users', $ext);
                    $user->image = $ext;
                }

                $user->save();

                return redirect("/edit");
            }

            if ($request->input("password")) {
                $current_password = $request->input("current_password");
                $new_password = $request->input("password");

                if (Hash::check($current_password, $user->password)) {
                    $user->password = Hash::make($new_password);
                    $user->save();
                } else {
                    return redirect("/edit")->withErrors(["password" => "Mật khẩu không đúng"]);
                }
            }
        }

        return view("edit");
    }
}

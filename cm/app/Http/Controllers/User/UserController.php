<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // user dashboard main 
    public function index()
    {
        $user_id = Auth::user()->id;

        // user's course statistics
        $query = "
            select count(*) as total from course_user 
            INNER JOIN users 
            on course_user.user_id = users.id where users.id = $user_id;  
        ";

        $countCourse = DB::select($query)[0]->total;

        return view("users.index", ['count' => $countCourse]);
    }

    public function myCourses(Request $request)
    {
        $id = Auth::user()->id;

        // get all course was registered by user
        $query = "
            select courses.* from course_user 
            INNER JOIN users on course_user.user_id = users.id 
            INNER JOIN courses on course_user.course_id = courses.id
            where users.id = $id;
        ";

        $courses = DB::select($query);

        if ($request->isMethod("POST")) {
            $course_id = intval($request->input('courseId'));

            // add user_id and course_id into course_user table
            $query = "insert into course_user(user_id, course_id) values ($id, $course_id)";

            DB::insert($query);

            return redirect("/my-courses");
        }

        return view("users.courses.index", ["courses" => $courses]);
    }

    // fullTextSearch course
    public function searchCourse()
    {
        $name = $_POST["name"];

        if ($name == "") {
            return redirect("/my-courses");
        }

        // fullTextSearch by searchCourse procedure
        $query = "call searchCourse('$name')";

        $courses = DB::select($query);

        return view("users.courses.index", ["courses" => $courses]);
    }

    // cancel course registration
    public function removeCourse($name)
    {
        $id = Auth::user()->id;
        $course_id = DB::select("select id from courses where name = '$name' ")[0]->id;

        DB::delete("delete from course_user where user_id = $id and course_id = $course_id");

        return redirect("/my-courses");
    }

    // edit user info
    public function edit(Request $request)
    {
        if ($request->isMethod("PUT")) {

            // get user by id
            $id = Auth::user()->id;
            $user = DB::select("select * from users where id = $id ")[0];

            // check if user edit info
            if ($request->input("name")) {
                $name = $request->input("name");
                $email = $request->input("email");
                $image = $user->image;

                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $ext = $file->getClientOriginalName();
                    $file->move('assets/uploads/users', $ext);
                    $image = $ext;
                }

                DB::update("update users set name = '$name', email = '$email', image = '$image' where id=$id");

                return redirect("/edit");
            }

            // Check if user edit password
            if ($request->input("password")) {
                $current_password = $request->input("current_password");
                $new_password = $request->input("password");

                if (Hash::check($current_password, $user->password)) {
                    $password = Hash::make($new_password);

                    DB::update("update users set password = '$password' where id=$id");
                } else {
                    return redirect("/edit")->withErrors(["password" => "Mật khẩu không đúng"]);
                }
            }
        }

        return view("edit");
    }
}

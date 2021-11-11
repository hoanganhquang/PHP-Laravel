<?php

class HomeController extends Controller
{
    public function index()
    {
        $course = $this->model("course");
        $courses = $course->all();

        $data["sub_content"]["courses"] = $courses;

        // View
        $data["content"] = "home/index";
        $this->render("layouts/client_layout", $data);
    }
}

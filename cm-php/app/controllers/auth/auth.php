<?php
class Auth extends Controller
{

    public function login()
    {
        $data["sub_content"] = [];
        $data["content"] = "auth/login";
        // View
        $this->render("layouts/client_layout", $data);
    }

    public function register()
    {
        $data["sub_content"] = [];
        $data["content"] = "auth/register";
        // View
        $this->render("layouts/client_layout", $data);
    }
}

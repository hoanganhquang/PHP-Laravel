<?php

class AuthController extends Controller
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
        $auth = $this->model("auth");

        if (isset($_POST["submit"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $password = password_hash($password, PASSWORD_DEFAULT);

            $auth->register("'$name', '$email', '$password'");

            header('Location: /home');
        }

        $data["sub_content"] = [];
        $data["content"] = "auth/register";

        // View
        $this->render("layouts/client_layout", $data);
    }
}

<?php

class AuthController extends Controller
{
    public function login()
    {
        $auth = $this->model("auth");

        $datas["content"] = "auth/login";
        $datas["sub_content"] = [];

        if (isset($_POST["submit"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];

            $data = ["email" => $email, "password" => $password];

            if (!$auth->login($data)) {
                header('Location: /login');
            }

            $datas["content"] = "home/index";
            $datas["sub_content"]["auth"] = $auth::auth();
        }

        // View
        $this->render("layouts/client_layout", $datas);
    }

    public function register()
    {
        $auth = $this->model("auth");

        if (isset($_POST["submit"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $password = password_hash($password, PASSWORD_DEFAULT);

            $data = ["name" => $name, "email" => $email, "password" => $password];

            $auth->register($data);

            header('Location: /home');
        }

        $data["sub_content"] = [];
        $data["content"] = "auth/register";

        // View
        $this->render("layouts/client_layout", $data);
    }

    public function logout()
    {
        $auth = $this->model("auth");

        $auth->logout();
    }
}

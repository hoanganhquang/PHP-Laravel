<?php

class App
{
    private $__controller, $__action, $__params;

    public function __construct()
    {
        global $routes;
        $this->__controller = $routes["default_controller"];
        $this->__action = "index";
        $this->__params = [];

        $this->handleUrl();
    }

    public function getUrl()
    {
        if (!empty($_SERVER["PATH_INFO"])) {
            $url = $_SERVER["PATH_INFO"];
        } else {
            $url = "/";
        }

        return $url;
    }

    public function handleUrl()
    {
        $url = $this->getUrl();
        $urlArr = array_values(array_filter(explode("/", $url)));

        // Handle controller
        if (!empty($urlArr[0])) {
            $this->__controller = $urlArr[0];

            if (file_exists("app/controllers/" . $this->__controller . ".php")) {
                require_once "controllers/" . $this->__controller . ".php";
                $this->__controller = new $this->__controller;
                unset($urlArr[0]);
            } else {
                return $this->showError();
            }
        } else {
            require_once "controllers/" . $this->__controller . ".php";
            $this->__controller = new $this->__controller;
        }


        // Handle action
        if (!empty($urlArr[1])) {
            if (method_exists($this->__controller, $urlArr[1])) {
                $this->__action = $urlArr[1];
                unset($urlArr[1]);
            } else {
                return $this->showError();
            }
        }

        // Handle params 
        $this->__params = $urlArr ? array_values($urlArr) : [];

        call_user_func_array([$this->__controller, $this->__action], $this->__params);
    }

    public function showError()
    {
        require_once "errors/404.php";
    }
}

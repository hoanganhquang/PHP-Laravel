<?php
class App
{
    protected $controller = "home";
    protected $action = "index";
    protected $params = [];

    public function __construct()
    {
        $urlArr = [];
        if (!empty($this->urlProcess())) {
            $urlArr = $this->urlProcess();
            $this->controller = $urlArr[0];
        }

        // Controller handle
        if (file_exists(ROOT . "/controllers/$this->controller.php")) {
            require_once "./app/controllers/$this->controller.php";
            $this->controller = new $this->controller;
            unset($urlArr[0]);
        } else {
            return $this->showError();
        }

        // Action handle 
        if (!empty($urlArr[1])) {
            if (method_exists($this->controller, $urlArr[1])) {
                $this->action = $urlArr[1];
            }
            unset($urlArr[1]);
        }

        //params handle
        $this->params = $urlArr ? array_values($urlArr) : [];

        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    public function urlProcess()
    {
        if (!empty($_SERVER["PATH_INFO"])) {
            $url = trim($_SERVER["PATH_INFO"]);
            $url = array_values(array_filter(explode("/", $url)));

            return $url;
        }
    }

    public function showError()
    {
        require_once "app/errors/404.php";
    }
}

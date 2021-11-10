<?php
class Controller
{
    public function model($model)
    {
        require_once ROOT . "/app/models/$model.php";

        $model = new $model;

        return $model;
    }

    public function render($view, $data = [])
    {
        extract($data);
        require_once "app/views/$view.php";
    }
}

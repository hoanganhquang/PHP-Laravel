<?php
class Home extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = $this->model("homeModel");
    }

    public function index()
    {
        echo $this->model->getList();
    }

    public function detail($id)
    {
        echo $this->model->getDetails($id);
    }
}

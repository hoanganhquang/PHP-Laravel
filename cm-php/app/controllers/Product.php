<?php
class Product extends Controller
{
    public $datas = [];

    public function index()
    {
        echo "hello";
    }

    public function getList()
    {
        $product = $this->model("productModel");
        $data = $product->getList();
        $this->datas["sub_content"]["data"] = $data;
        $this->datas["sub_content"]["num"] = 1;
        $this->datas["content"] = "products/list";
        $this->render("layouts/client_layout", $this->datas);
    }
}

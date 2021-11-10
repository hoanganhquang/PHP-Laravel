<?php

class Product extends Controller
{
    public $data = [];

    public function index()
    {
        echo "Product Page";
    }

    public function all()
    {
        $products = $this->model("productModel");
        $listProd = $products->getList();
        $this->data["sub_content"]["listProd"] = $listProd;
        $this->data["title"] = "Product Page";

        // content view 
        $this->data["content"] = "products/list";

        $this->render("layouts/client_layout", $this->data);
    }

    public function getId($id)
    {
        echo "Product $id";
    }
}

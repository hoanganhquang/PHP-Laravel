<?php

class Product extends Controller
{

    public function index()
    {
        echo "Product Page";
    }

    public function all()
    {
        $products = $this->model("productModel");

        print_r($products->getList());
    }
}

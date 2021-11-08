<?php
class Product extends Controller
{

    public function index()
    {
        $product = $this->model("productModel");
        echo $product->getList();
    }
}

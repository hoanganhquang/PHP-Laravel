<?php
class productModel
{
    protected $table = "products";

    public function getList()
    {
        $data = ["item1", "item2"];

        return $data;
    }
}

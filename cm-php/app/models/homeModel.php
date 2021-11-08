<?php
class HomeModel
{
    protected $_table = "products";

    public function getList()
    {
        $data = [
            "item1",
            "item2"
        ];

        return $data;
    }

    public function getDetails($id)
    {
        $data = [
            "item1",
            "item2"
        ];

        return $data[$id];
    }
}

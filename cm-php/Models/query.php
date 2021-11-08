<?php

class Query
{
    private $conn;
    private $table;

    public function __construct($conn, $table)
    {
        $this->conn = $conn;
        $this->table = $table;
    }

    public function getAll()
    {
        $query = "select * from " . $this->table;
        $result = $this->conn->query($query);
        return $result;
    }
}

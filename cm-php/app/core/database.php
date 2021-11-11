<?php

class Database
{
    private $conn;
    private $servername = "127.0.0.1";
    private $username = "root";
    private $password = "";
    private $dbname = "course_management";
    private $port = "3307";

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname, $this->port);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function selectAll($table)
    {
        $query = "select * from $table";

        return $this->conn->query($query)->fetch_all(MYSQLI_ASSOC);
    }

    public function selectOne($table, $data)
    {
        $query = "select * from $table where $data";

        return $this->conn->query($query)->fetch_assoc();
    }

    public function createOne($table, $fields, $data)
    {
        try {
            $query = "insert into $table ($fields) values ($data)";

            $this->conn->query($query);
        } catch (Exception $exception) {
            $mess = $exception->getMessage();
            die($mess);
        }
    }

    public function close()
    {
        return $this->conn->close();
    }
}

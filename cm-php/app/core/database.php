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

    public function close()
    {
        return $this->conn->close();
    }
}

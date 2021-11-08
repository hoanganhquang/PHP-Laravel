<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db_name = "course_management";
$port = "3307";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

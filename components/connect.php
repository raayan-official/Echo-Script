<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "blog_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection Faield: " . $conn->connect_error);
}
echo "Connection Successfully";

?>
<?php
$servername = "localhost";
$username = "terezaK";
$password = "terezaK5";
$dbname = "gymbody";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
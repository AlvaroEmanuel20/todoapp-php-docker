<?php
$host = 'database';
$db = 'todo_app_db';
$user = 'root';
$pass = 'root123';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

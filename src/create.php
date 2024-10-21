<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task = $conn->real_escape_string($_POST['task']);
    $query = "INSERT INTO todos (task) VALUES ('$task')";
    $conn->query($query);
}

header('Location: index.php');
?>

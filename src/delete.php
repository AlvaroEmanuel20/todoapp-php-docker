<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "DELETE FROM todos WHERE id = $id";
    $conn->query($query);
}

header('Location: index.php');
?>

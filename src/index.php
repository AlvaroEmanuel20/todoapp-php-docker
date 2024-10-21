<?php
include 'database.php';

$query = "SELECT * FROM todos";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Todo App</title>
</head>
<body>
    <h1>Todo List</h1>
    <form action="create.php" method="POST">
        <input type="text" name="task" required>
        <button type="submit">Adicionar</button>
    </form>
    <ul>
        <?php while ($row = $result->fetch_assoc()): ?>
            <li>
                <?= htmlspecialchars($row['task']) ?>
                <a href="delete.php?id=<?= $row['id'] ?>">Excluir</a>
            </li>
        <?php endwhile; ?>
    </ul>
</body>
</html>

<?php
$conn->close();
?>

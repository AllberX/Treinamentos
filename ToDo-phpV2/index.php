<?php
include 'db.php';

// Buscar tarefas
$sql = "SELECT id, task FROM tasks";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lista de Tarefas</h1>

    <form action="add_task.php" method="post">
        <input type="text" name="task" placeholder="Nova tarefa" required>
        <button type="submit">Adicionar</button>
    </form>

    <ul>
        <?php while ($row = $result->fetch_assoc()): ?>
            <li>
                <?php echo htmlspecialchars($row['task']); ?>
                <a href="delete_task.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a>
            </li>
        <?php endwhile; ?>
    </ul>
</body>
</html>
<?php
$conn->close();
?>

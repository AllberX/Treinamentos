<?php
// tasks.php

$taskFile = 'tasks.txt';

// Função para obter todas as tarefas
function getTasks() {
    global $taskFile;

    if (!file_exists($taskFile)) {
        return [];
    }

    $tasks = file($taskFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return $tasks;
}

// Função para adicionar uma nova tarefa
function addTask($task) {
    global $taskFile;

    file_put_contents($taskFile, $task . PHP_EOL, FILE_APPEND);
}
?>

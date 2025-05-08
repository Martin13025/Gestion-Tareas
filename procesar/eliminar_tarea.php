<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php?page=login");
    exit();
}

$id = $_GET['id'] ?? null;
$usuario = $_SESSION['usuario'];

if (isset($_SESSION['tareas'][$usuario][$id])) {
    unset($_SESSION['tareas'][$usuario][$id]);
    // Переиндексация массива
    $_SESSION['tareas'][$usuario] = array_values($_SESSION['tareas'][$usuario]);
}
header("Location: ../index.php?page=tareas");
?>

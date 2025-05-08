<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php?page=login");
    exit();
}

$id = $_GET['id'] ?? null;
$usuario = $_SESSION['usuario'];

if (isset($_SESSION['tareas'][$usuario][$id])) {
    $_SESSION['tareas'][$usuario][$id]['completada'] = true;
}
header("Location: ../index.php?page=tareas");
?>

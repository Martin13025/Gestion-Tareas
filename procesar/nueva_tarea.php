<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php?page=login");
    exit();
}

$texto = $_POST['texto'] ?? '';
if ($texto) {
    $usuario = $_SESSION['usuario'];
    $_SESSION['tareas'][$usuario][] = [
        'texto' => $texto,
        'completada' => false
    ];
}
header("Location: ../index.php?page=tareas");
?>

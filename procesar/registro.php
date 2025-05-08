<?php
session_start();

$usuario = $_POST['usuario'] ?? '';
$clave = $_POST['clave'] ?? '';

if ($usuario && $clave) {
    $_SESSION['usuarios'][$usuario] = $clave;
    $_SESSION['tareas'][$usuario] = [];
    echo "Registro exitoso. <a href='../index.php?page=login'>Iniciar sesión</a>";
} else {
    echo "Faltan datos.";
}
?>

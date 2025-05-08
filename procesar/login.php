<?php
session_start();

$usuario = $_POST['usuario'] ?? '';
$clave = $_POST['clave'] ?? '';

$usuarios = $_SESSION['usuarios'] ?? [];

if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $clave) {
    $_SESSION['usuario'] = $usuario;
    header("Location: ../index.php?page=tareas");
} else {
    echo "Usuario o contraseña incorrectos.";
}
?>

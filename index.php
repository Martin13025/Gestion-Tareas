<?php
session_start();
$page = $_GET['page'] ?? 'home';
$viewPath = __DIR__ . "/views/{$page}.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestor de Tareas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS (v5) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <?php include "nav.php"; ?>

  <div class="container mt-4">
    <?php
    if (file_exists($viewPath)) {
        include $viewPath;
    } else {
        include "views/404.php";
    }
    ?>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

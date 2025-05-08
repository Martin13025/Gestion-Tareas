<?php
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php?page=login");
    exit();
}
$tareas = $_SESSION['tareas'][$_SESSION['usuario']] ?? [];
?>

<h2 class="mb-4">Tus tareas</h2>

<form action="procesar/nueva_tarea.php" method="post" class="mb-4 d-flex">
  <input type="text" name="texto" class="form-control me-2" placeholder="Nueva tarea..." required>
  <button type="submit" class="btn btn-primary">Agregar</button>
</form>

<ul class="list-group">
  <?php foreach ($tareas as $i => $t): ?>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      <span class="<?= $t['completada'] ? 'text-decoration-line-through text-success' : '' ?>">
        <?= htmlspecialchars($t['texto']) ?> <?= $t['completada'] ? '✅' : '❌' ?>
      </span>
      <div>
        <?php if (!$t['completada']): ?>
          <a href="procesar/completar_tarea.php?id=<?= $i ?>" class="btn btn-sm btn-warning me-1">✔</a>
        <?php endif; ?>
        <a href="procesar/eliminar_tarea.php?id=<?= $i ?>" class="btn btn-sm btn-danger">🗑</a>
      </div>
    </li>
  <?php endforeach; ?>
</ul>

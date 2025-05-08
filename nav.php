<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">Tareas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <?php if (isset($_SESSION['usuario'])): ?>
          <li class="nav-item"><a class="nav-link" href="index.php?page=tareas">Mis Tareas</a></li>
          <li class="nav-item"><a class="nav-link" href="procesar/salir.php">Salir (<?= $_SESSION['usuario'] ?>)</a></li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="index.php?page=login">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php?page=registro">Registro</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

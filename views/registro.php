<div class="row justify-content-center mt-5">
  <div class="col-md-6">
    <h2 class="mb-4 text-center">Registro</h2>
    <form method="post" action="procesar/registro.php">
      <div class="mb-3">
        <label class="form-label">Nuevo usuario</label>
        <input type="text" name="usuario" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Contraseña</label>
        <input type="password" name="clave" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success w-100">Registrarse</button>
    </form>
  </div>
</div>

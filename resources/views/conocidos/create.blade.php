<!DOCTYPE html>
<html>
<head>
  <title>Editar Usuario</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Crear Usuario</h1>
    <form method="post" action="{{route('conocidos.store')}}">
        @csrf
    <label for='nombre'>Nombre:</label>
    <input type='text' name='nombre' id='nombre' required>
    <br>
    <label for='usuario'>Usuario</label>
    <input type='string' name='usuario' id='usuario' required>
    <br>
    <label for='clave'>clave</label>
    <input type='string' name='clave' id='clave' required>
    <br>
    <input type="submit" value="Crear">
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

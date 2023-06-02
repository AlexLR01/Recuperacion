<!DOCTYPE html>
<html>
<head>
  <title>Editar Usuario</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Editar Usuario</h1>
    <form method="post" action="{{route('conocidos.update',$conocido)}}">
        @method('PUT')
        @csrf
    <label for='nombre'>Nombre:</label>
    <input type='text' name='nombre' id='nombre' value="{{$conocido->nombre}}" required>
    <br>
    <label for='usuario'>Usuario</label>
    <input type='text' name='usuario' id='usuario' value="{{$conocido->usuario}}" required>
    <br>
    <label for='clave'>Clave</label>
    <input type='text' name='clave' id='clave' value="{{$conocido->clave}}" required>
    <br>
    <input type="submit" value="Actualizar">
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

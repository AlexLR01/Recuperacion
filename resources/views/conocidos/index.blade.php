<!DOCTYPE html>
<html>
<head>
  <title>Usuarios</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 8px;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h1>Usuarios</h1>
  <table class="table">
    <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Usuario</th>
      <th>Clave</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($conocidos as $conocido)
        <tr>
            <th>{{$conocido->id}}</th>
            <th>{{$conocido->nombre}}</th>
            <th>{{$conocido->usuario}}</th>
            <th>{{$conocido->clave}}</th>
            <td><a href="{{route('conocidos.edit', $conocido)}}">Editar</a></td>

            <td>
                <form method="post" action="{{route('conocidos.destroy',$conocido)}}">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Borrar">
                </form>
              </td>


        </tr>

        @endforeach

    </tbody>


    </tr>
    <!-- Agrega más filas de usuarios según sea necesario -->
  </table>
  <a href="{{route('conocidos.create')}}">Crear un usuario</a>
 
</body>
</html>

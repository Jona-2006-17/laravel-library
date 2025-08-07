<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="{{route('biblioteca.create')}}">Registrar libro</a>
            </div>
        </div>
        <form method="GET" action="{{route('biblioteca.index')}}">
            <input type="text" name="buscar" placeholder="Buscar por titulo o autor" value="{{request('buscar')}}">
            <button type="submit">Buscar</button>
        </form>
        <div class="row">
            <div class="col-6">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Autor</th>
                            <th>Año</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tbody>
                            @forelse($biblioteca as $libro)
                                <tr>
                                    <td>{{$libro->titulo}}</td>
                                    <td>{{$libro->autor}}</td>
                                    <td>{{$libro->año}}</td>
                                    <td><button class="btn btn-secondary"><a href="{{route('biblioteca.edit', $libro->id)}}" class="text-decoration-none text-white">Actualizar</a></button></td>
                                    <td>
                                        <form method="POST" action="{{route('biblioteca.destroy', $libro->id)}}" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este libro?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-secondary" type="submit">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>No hay nada</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>
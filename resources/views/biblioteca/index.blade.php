<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    @vite(['resources/css/estilos.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container containerPrincipal mt-4">
        <div class="row justify-content-center">
            <div class="col-10 g-3 mb-3">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-info border text-white" href="{{route('biblioteca.create')}}">Registrar libro</a>
                    </div>
                    <div class="col-9">
                        <form method="GET" action="{{route('biblioteca.index')}}">
                            <div class="row justify-content-center">
                                <div class="col-5">
                                    <input class="form-control" type="text" name="buscar" placeholder="Buscar por titulo o autor" value="{{request('buscar')}}">
                                </div>
                                <div class="col-2 d-grid">
                                    <button class="btn btn-primary" type="submit">Buscar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
           
        </div>
        
        <div class="row justify-content-center">
            <div class="col-10">
                <table class="table table-hover table-bordered align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Titulo</th>
                            <th>Autor</th>
                            <th>Año</th>
                            <th>Genero</th>
                            <th>Descripcion</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tbody>
                            @forelse($biblioteca as $libro)
                                <tr>
                                    <td>{{$libro->titulo}}</td>
                                    <td>{{$libro->autor}}</td>
                                    <td>{{$libro->año}}</td>
                                    <td><span class="badge bg-info">{{ $libro->genero }}</span></td>
                                    <td>{{$libro->descripcion}}</td>
                                    <td><a href="{{route('biblioteca.edit', $libro->id)}}" class="btn btn-sm btn-primary">Actualizar</a></td>
                                    <td>
                                        <form method="POST" action="{{route('biblioteca.destroy', $libro->id)}}" onclick="return confirm('¿Estás seguro?')" >
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
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
                <div class="col-12 d-flex justify-content-center">
                    {{$biblioteca->links()}}
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>
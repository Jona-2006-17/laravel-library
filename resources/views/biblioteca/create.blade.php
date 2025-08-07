<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
    <h1>Create1</h1>
    <div class="container">
        <div class="row">
            <div class="col">
              <a href="{{route('biblioteca.index')}}">Volver</a>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form method="POST" action="{{route('biblioteca.store')}}">
                    @csrf
                    <h5>Titulo</h5>
                    <input class="input" type="text" name="titulo">
                    @error('titulo')
                      <h5>{{$message}}</h5>
                    @enderror
                    <h5>Autor</h5>
                    <input class="input" type="text" name="autor">
                    @error('autor')
                      <h5>{{$message}}</h5>
                    @enderror
                    <h5>Año</h5>
                    <input class="input" type="text" name="año">
                    @error('año')
                      <h5>{{$message}}</h5>
                    @enderror
                    <button type="submit">Enviar</button>
                </form> 
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>
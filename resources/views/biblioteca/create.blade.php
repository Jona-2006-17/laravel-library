<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    @vite(['resources/css/estilos.css', 'resources/js/app.js'])
  
  </head>
  <body>
    <div class="container pt-5">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{route('biblioteca.index')}}">Volver al listado</a>
          </div>
          <div class="formulario">
            <form method="POST" action="{{route('biblioteca.store')}}">
              @csrf
              <div class="mb-4">
                <h5 class="form-title">Información del Libro</h5>
                        
                <div class="mb-3">
                  <label for="titulo" class="form-label fw-bold">Título *</label>
                  <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese el título del libro">
                  @error('titulo')
                    <div class="error-message">{{$message}}</div>
                  @enderror
                </div>
                        
                <div class="mb-3">
                  <label for="autor" class="form-label fw-bold">Autor *</label>
                  <input type="text" class="form-control" id="autor" name="autor" placeholder="Nombre completo del autor">
                  @error('autor')
                    <div class="error-message">{{$message}}</div>
                  @enderror
                </div>
                        
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="año" class="form-label fw-bold">Año de publicación *</label>
                    <input type="text" class="form-control" id="año" name="año" placeholder="Ej: 2023">
                    @error('año')
                      <div class="error-message">{{$message}}</div>
                    @enderror
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="genero" class="form-label fw-bold">Género *</label>
                    <input type="text" class="form-control" id="genero" name="genero" placeholder="Ej: Novela, Ciencia Ficción">
                    @error('genero')
                      <div class="error-message">{{$message}}</div>
                    @enderror
                  </div>
                </div>
                <div class="mb-4">
                  <label for="descripcion" class="form-label fw-bold">Descripción (opcional)</label>
                  <textarea class="form-control" id="descripcion" name="descripcion" rows="4" placeholder="Breve descripción del contenido del libro"></textarea>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button type="submit" class="btn btn-custom px-4 py-2">Guardar Libro</button>
                </div>
              </div>
            </form> 
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>


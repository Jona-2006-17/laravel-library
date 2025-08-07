<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('biblioteca.index')}}">Volver</a>
    <form method="POST" action="{{route('biblioteca.update', $biblioteca->id)}}">
        @csrf
        @method('put')
        <input type="text" name="titulo" value="{{$biblioteca->titulo}}">
        <input type="text" name="autor" value="{{$biblioteca->autor}}">
        <input type="text" name="año" value="{{$biblioteca->año}}">
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
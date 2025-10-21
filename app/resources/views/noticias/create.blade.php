<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear Noticia</title>
</head>
<body>
    <h1>Crear Nueva Noticia</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('noticias.store') }}" method="POST">
        @csrf
        <div>
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}">
        </div>

        <div>
            <label for="contenido">Contenido:</label>
            <textarea name="contenido" id="contenido">{{ old('contenido') }}</textarea>
        </div>

        <button type="submit">Guardar Noticia</button>
    </form>

    <p><a href="{{ route('noticias.index') }}">Volver al listado</a></p>
</body>
</html>

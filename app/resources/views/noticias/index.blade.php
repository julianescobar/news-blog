<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News Blog</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        h1 { color: #333; }
        .noticia { margin-bottom: 30px; padding-bottom: 10px; border-bottom: 1px solid #ccc; }
        .titulo { font-size: 1.5em; color: #007bff; margin-bottom: 5px; }
        .contenido { font-size: 1.1em; color: #555; }
    </style>
</head>
<body>
    <h1>News Blog</h1>

    @forelse($noticias as $noticia)
        <div class="noticia">
            <div class="titulo">{{ $noticia->titulo }}</div>
            <div class="contenido">{{ $noticia->contenido }}</div>
        </div>
    @empty
        <p>No hay noticias disponibles.</p>
    @endforelse

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
</head>
<body>
    <h1>Meu Portfólio</h1>

    <h2>Projetos</h2>
    <ul>
        @foreach($projetos as $projeto)
            <li>{{ $projeto->title }} - {{ $projeto->description }}</li>
        @endforeach
    </ul>

    <h2>Experiências Profissionais</h2>
    <ul>
        @foreach($experienciasProfissionais as $experiencia)
            <li>{{ $experiencia->title }} - {{ $experiencia->description }}</li>
        @endforeach
    </ul>

    <h2>Sobre Mim</h2>
    <p>{{ $sobreMim->content }}</p>

    <h2>Redes Sociais</h2>
    <ul>
        @foreach($redesSociais as $redeSocial)
            <li>{{ $redeSocial->platform }} - {{ $redeSocial->url }}</li>
        @endforeach
    </ul>
</body>
</html>

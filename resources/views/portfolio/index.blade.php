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
        @forelse($projetos as $projeto)
            <li>{{ $projeto->nome }} - {{ $projeto->descricao }}</li>
        @empty
            <li>Nenhum projeto disponível</li>
        @endforelse
    </ul>

    <h2>Experiências Profissionais</h2>
    <ul>
        @forelse($experienciasProfissionais as $experiencia)
            <li>{{ $experiencia->cargo }} - {{ $experiencia->descricao }}</li>
        @empty
            <li>Nenhuma experiência profissional disponível</li>
        @endforelse
    </ul>

    <h2>Sobre Mim</h2>
    <p>{{ $sobreMim->content ?? 'Nenhuma informação disponível' }}</p>

    <h2>Redes Sociais</h2>
    <ul>
        @forelse($redesSociais as $redeSocial)
            <li>{{ $redeSocial->platform }} - {{ $redeSocial->url }}</li>
        @empty
            <li>Nenhuma rede social disponível</li>
        @endforelse
    </ul>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Gerador de Portfólio</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
   <nav>
   <img src="{{ asset('imagem/logo.png') }}" alt="Descrição da Imagem">

   </nav>

   <main>
<div class="text-main">
   <h1>Encontrou uma oportunidade incrível e precisa de um portfólio para se destacar? Não se preocupe!</h1><p>Crie o seu de forma rápida e <b>gratuita</b> com o nosso Gerador de Portfólio. Destaque suas habilidades, projetos e experiências de maneira profissional. Não deixe escapar essa chance, comece agora!</p>
</div>
   <div class="formulario">

   <form action="{{ route('generatePortfolio') }}" method="POST">
    @csrf

    <!-- Informações Pessoais -->
    <h2>Informações Pessoais</h2>
    <input placeholder="Nome" type="text" name="nome" required>
    <input type="text" placeholder="Sobrenome" name="sobrenome" required>
    <input type="email" placeholder="E-mail" name="email" required>

    <!-- Experiência Profissional -->
    <h2>Experiência Profissional</h2>
    <input type="text" placeholder="Cargo" name="cargo" required>
    <input type="text" name="empresa" placeholder="Empresa" required>
    <input type="text" name="descricao" placeholder="Descrição" required>

    <!-- Projetos -->
    <h2>Projetos</h2>
    <input type="text" placeholder="Nome do Projeto:" name="projeto" required>
    <input name="descricao_projeto" placeholder="Descrição do Projeto" required>

    <!-- Redes Sociais -->
    <h2>Redes Sociais</h2>
    <input type="text" placeholder="LinkedIn" name="linkedin">
    <input type="text" placeholder="GitHub" name="github">

    <!-- Campos Adicionais -->
    <h2>Campos Adicionais</h2>
    <input type="text" placeholder="Short Description" name="shortDescription">
    <input type="text" placeholder="About Yourself" name="aboutYourself">
    <input type="text" placeholder="Additional Info" name="additionalInfo">

    <!-- Adicione campos adicionais conforme necessário -->

    <button type="submit">Gerar Portfólio</button>
</form>


    </div>
    </main>
    <section>
       <div class="text-description">
        <div class="text">
           <h2> Destaque suas realizações profissionais de forma única!</h2>
            <p> Com nosso Gerador de Portfólio, você pode construir uma vitrine digital impressionante das suas conquistas. Proporcionamos uma jornada de aprendizado segura e recompensadora, onde cada projeto e experiência ganham destaque. Seu futuro profissional começa aqui!</p>
        </div>
        <div class="text">
        <h2> Desperte o potencial do seu currículo!</h2>
            <p>  Junte-se ao nosso Gerador de Portfólio, uma plataforma feita para aqueles que desejam criar um portfólio único. Oferecemos um ambiente de trabalho protegido por leis trabalhistas, garantindo uma experiência valiosa e segura enquanto você desenvolve suas habilidades.</p>
        </div>
        
        

        <div class="text">
        <h2> Dê vida ao seu portfólio com facilidade! </h2>
            <p>  Explore nosso Gerador de Portfólio, uma plataforma dedicada a quem está em busca de uma jornada de aprendizado envolvente. Em um ambiente seguro e com remuneração justa, você terá a oportunidade de destacar suas habilidades e projetos de forma única.</p>
        </div>
        </div>

       </div>
       <div class="oque">
    <div class="video">
        <h1>O que é um portfólio?</h1>
        <a data-fancybox href="{{ asset('videos/portifolio.mp4') }}">
            <img src="{{ asset('imagem/tumbnail/tumb.png') }}" alt="Thumbnail do Vídeo">
        </a>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            type: "iframe", // Pode ser "iframe" para vídeos
            iframe: {
                preload: false // Evita o pré-carregamento do iframe para melhorar o desempenho
            },
            animationEffect: "fade",
            transitionEffect: "slide",
            buttons: [
                "zoom",
                "share",
                "slideShow",
                "fullScreen",
                "download",
                "thumbs",
                "close"
            ]
        });
    });
</script>

    <div class="oquetxt">
        <div class="oqtext">
        <img src="{{ asset('imagem/icon/narrativa (1).png') }}" width="80px" alt="Thumbnail do Vídeo">
          <h1>Construa Sua Narrativa Profissional com um Portfólio Impactante</h1> 
           <p>Em um mundo cada vez mais digital e competitivo, apresentar sua jornada profissional de maneira envolvente e visualmente atraente é essencial. Seu portfólio é a vitrine que revela não apenas suas habilidades técnicas, mas também a sua criatividade, paixão e experiências únicas.</p>
        </div>

        <div class="oqtext">
        <img src="{{ asset('imagem/icon/conquistas.png') }}" width="80px" alt="Thumbnail do Vídeo">
          <h1>Destaque Suas Conquistas</h1> 
           <p>Seja projetos inovadores, colaborações notáveis ou desafios superados, seu portfólio é o palco para exibir suas conquistas de forma clara e persuasiva. Cada projeto compartilhado conta uma história, proporcionando aos espectadores uma visão autêntica do seu talento e dedicação.</p>
        </div>

        <div class="oqtext">
        <img src="{{ asset('imagem/icon/habilidade.png') }}" width="80px" alt="Thumbnail do Vídeo">
          <h1>Mostre Sua Diversidade</h1> 
           <p>Diversidade é a chave para um portfólio impactante. Apresente uma ampla gama de projetos e habilidades para revelar a versatilidade que você oferece. Seja na área de design, desenvolvimento, escrita ou qualquer outra disciplina, sua diversidade reflete sua adaptabilidade e prontidão para enfrentar desafios diversos.</p>
        </div>

        <div class="oqtext">
        <img src="{{ asset('imagem/icon/cerebro.png') }}" width="80px" alt="Thumbnail do Vídeo">
          <h1>Demonstre Seu Processo Criativo</h1> 
           <p>Não se trata apenas dos resultados finais, mas do processo que leva a eles. Compartilhe insights sobre seu processo criativo, desde a concepção da ideia até a execução e os aprendizados ao longo do caminho. Isso não apenas destaca suas habilidades técnicas, mas também revela sua abordagem única para resolver problemas.</p>
        </div>
        <div class="oqtext">
        <img src="{{ asset('imagem/icon/visuais.png') }}" width="80px" alt="Thumbnail do Vídeo">
          <h1>Integre Elementos Visuais Impactantes</h1> 
           <p>Imagens, gráficos, vídeos e outros elementos visuais podem transformar seu portfólio em uma experiência envolvente. Ao apresentar seus projetos de maneira visualmente atraente, você captura a atenção e facilita a compreensão da qualidade e impacto do seu trabalho.</p>
        </div>

        <div class="oqtext">
        <img src="{{ asset('imagem/icon/avaliacao.png') }}" width="80px" alt="Thumbnail do Vídeo">
          <h1>Inclua Depoimentos e Recomendações</h1> 
           <p>Depoimentos e recomendações de colegas, clientes ou supervisores adicionam uma camada extra de credibilidade ao seu portfólio. Essas avaliações fornecem uma perspectiva externa sobre suas habilidades e contribuem para construir confiança naqueles que exploram seu trabalho.</p>
        </div>

        <div class="oqtext">
        <img src="{{ asset('imagem/icon/grafico.png') }}" width="80px" alt="Thumbnail do Vídeo">
        <h1> O Poder de um Portfólio Bem Elaborado</h1>
           <p>Seja você um designer, desenvolvedor, escritor ou profissional de qualquer área, seu portfólio é uma ferramenta poderosa para contar sua história profissional de maneira única. Invista tempo e cuidado na criação do seu portfólio, pois ele não é apenas um conjunto de trabalhos, mas uma representação visual da sua jornada profissional.</p>
        </div>

    </div>
        
        </div>
    </section>
    <footer>
    <div class="copy">© 2024 
  <a href="https://www.linkedin.com/in/estev%C3%A3o-gabriel-oliveira-5339aa174/" target="_blank"> Estevão Gabriel Oliveira</a>
</div>
    </footer>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
</body>
</html>

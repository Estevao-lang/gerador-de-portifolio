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
   <h1>Encontrou uma oportunidade incrível e precisa de um portfólio para se destacar? Não se preocupe!</h1><p>E Crie o seu de forma rápida e <b>gratuita</b> com o nosso Gerador de Portfólio. Destaque suas habilidades, projetos e experiências de maneira profissional. Não deixe escapar essa chance, comece agora!</p>
</div>
   <div class="formulario">

    <form action="{{ route('generatePortfolio') }}" method="POST">
        @csrf

        <!-- Informações Pessoais -->
        <h2>Informações Pessoais</h2>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" required>

        <label for="email">E-mail:</label>
        <input type="email" name="email" required>

        <!-- Experiência Profissional -->
        <h2>Experiência Profissional</h2>
        <label for="cargo">Cargo:</label>
        <input type="text" name="cargo" required>

        <label for="empresa">Empresa:</label>
        <input type="text" name="empresa" required>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" rows="4" required></textarea>

        <!-- Projetos -->
        <h2>Projetos</h2>
        <label for="projeto">Nome do Projeto:</label>
        <input type="text" name="projeto" required>

        <label for="descricao_projeto">Descrição do Projeto:</label>
        <textarea name="descricao_projeto" rows="4" required></textarea>

        <!-- Redes Sociais -->
        <h2>Redes Sociais</h2>
        <label for="linkedin">LinkedIn:</label>
        <input type="text" name="linkedin">

        <label for="github">GitHub:</label>
        <input type="text" name="github">

        <!-- Outros Campos Adicionais -->
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
        <div class="video">
            <h1>Oque é um portifolio?</h1>
        <video width="640" height="360" controls>
        <source src="{{ asset('videos/portifolio.mp4') }}" type="video/mp4">
      
    </video>
        </div>
       
    </section>
    <footer>
    <div class="copy">© 2024 
  <a href="https://www.linkedin.com/in/estev%C3%A3o-gabriel-oliveira-5339aa174/" target="_blank"> Estevão Gabriel Oliveira</a>
</div>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Modelo de Site de Portfólio</title>
    
    <link rel="stylesheet" href="{{ asset('css/portifolio.css') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Repl.it_logo.svg/220px-Repl.it_logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Laravel Asset - incluindo o script.js da pasta public/js -->
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
    <div class="container">
        <!-- Cabeçalho -->
        <header>
            <nav>  
                <ul class="nav-bar">
                    <div class="bg"></div>
                    <li><a class="nav-link active" href="#home">Início</a></li>
                    <li><a class="nav-link" href="#projects">Projetos</a></li>
                    <li><a class="nav-link" href="#contact">Contato</a></li>
                </ul>
                <div class="hamburger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </nav>
        </header>

        <main>
            <!-- Seção Início -->
            <div id="home">
                <div class="filter"></div>
                <section class="intro">
                    <h3>{{ $nomeCompleto ?? 'Seu Nome' }}.<hr></h3>
                    <p>{{ $shortDescription ?? 'Breve Descrição' }}</p>
                    <p>{{ $aboutYourself ?? 'Algo mais sobre você' }}</p>
                    <p>{{ $additionalInfo ?? 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.' }}</p>
                    <!-- Links de mídia social -->
                    <div class="social-media">
                        <a href="{{ $linkedin ?? '#' }}" target="_blank"><i class='fab fa-linkedin-in'></i></a>
                        <a href="{{ $github ?? '#' }}" target="_blank"><i class='fab fa-github'></i></a>
                        <!-- Adicione outros links conforme necessário -->
                    </div>
                </section>
            </div>

            <!-- Seção Projetos -->
            <div id="projects"> 
                <h3>Meus Projetos.<hr></h3>
                <p>Aqui estão alguns dos meus projetos que você pode gostar.</p>
                <div class="work-box">
                    <div class="work">
                        <!-- Cartão 1 -->
                        <div class="card">
                            <img class="work-img" src="{{ $projectImage1 ?? 'https://images.unsplash.com/photo-1518611507436-f9221403cca2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1225&q=80' }}">
                            <a href="{{ $projectLink1 ?? '#' }}" target="_blank">
                                <div class="work-content">{{ $projectDescription1 ?? 'Lorem ipsum dolor sit amet consectetur.' }}</div>
                            </a>
                        </div>
                        <!-- Cartão 2 (Repetir estrutura para cartões adicionais) -->
                        <!-- ... -->
                    </div>
                </div>
            </div>

            <!-- Seção Contato -->
            <div id="contact">
                <h3>Contato.<hr></h3>
                <p>Sinta-se à vontade para entrar em contato comigo em minhas redes sociais.</p>
                <div class="social-media">
                    <a href="{{ $codepenLink ?? '#' }}" target="_blank"><i class='fab fa-codepen'></i></a>
                    <a href="{{ $twitterLink ?? '#' }}" target="_blank"><i class='fab fa-twitter'></i></a>
                    <a href="{{ $githubLink ?? '#' }}" target="_blank"><i class='fab fa-github'></i></a>
                    <a href="{{ $linkedinLink ?? '#' }}" target="_blank"><i class='fab fa-linkedin-in'></i></a>
                    <a href="{{ $youtubeLink ?? '#' }}" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </main>

        <!-- Rodapé -->
        <footer class="copyright">© 2020 
            <a href="{{ $replLink ?? 'https://portifolio-jvp0.onrender.com/' }}" target="_blank">{{ $replAuthor ?? 'Estevão Gabriel Oliveira' }}</a>
        </footer>
    </div>

    <!-- Script do crachá Repl.it -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script>
</body>
</html>

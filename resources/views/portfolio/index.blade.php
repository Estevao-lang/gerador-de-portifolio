<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width">
      <title>Portfolio site template</title>
      
    <link rel="stylesheet" href="{{ asset('css/portifolio.css') }}">

      <link rel="stylesheet" href="https://use.fontawesome.com/releaszes/v5.13.0/css/all.css">
      <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Repl.it_logo.svg/220px-Repl.it_logo.png">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Laravel Asset - incluindo o script.js da pasta public/js -->
<script src="{{ asset('js/script.js') }}"></script>

  </head>
  <body>
    <div class="container">
      <!-- Header -->
      <header>
       
        <nav>  
          <ul class="nav-bar">
            <div class="bg"></div>
            <li><a class="nav-link active" href="#home">Home</a></li>
            <li><a class="nav-link" href="#projects">Projects</a></li>
            <li><a class="nav-link" href="#contact">Contact</a></li>
          </ul>
          <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
          </div>
        </nav>
      </header>
      <main>
        <!-- Home Section -->
        <div id="home">
    <div class="filter"></div>
    <section class="intro">
        <h3>{{ $nomeCompleto ?? 'Your Name' }}.<hr></h3>
        <p>{{ $shortDescription ?? 'Short Description' }}</p>
        <p>{{ $aboutYourself ?? 'Something more about yourself' }}</p>
        <p>{{ $additionalInfo ?? 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.' }}</p>
        <!-- Social media links -->
        <div class="social-media">
            <a href="{{ $linkedin ?? '#' }}" target="_blank"><i class='fab fa-linkedin-in'></i></a>
            <a href="{{ $github ?? '#' }}" target="_blank"><i class='fab fa-github'></i></a>
            <!-- Adicione outros links conforme necessário -->
        </div>
    </section>
</div>

        <!-- Projects Section -->
        <div id="projects"> 
          <h3>My Projects.<hr></h3>
          <p>Here are some of my projects, you may like.</p>
          <div class="work-box">
            <div class="work">
              <!-- Card 1 -->
              <div class="card">
                <img class="work-img" src="{{ $projectImage1 ?? 'https://images.unsplash.com/photo-1518611507436-f9221403cca2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1225&q=80' }}">
                <a href="{{ $projectLink1 ?? '#' }}" target="_blank">
                  <div class="work-content">{{ $projectDescription1 ?? 'Lorem ipsum dolor sit amet consectetur.' }}</div>
                </a>
              </div>
              <!-- Card 2 (Repeat structure for additional cards) -->
              <!-- ... -->
            </div>
          </div>
        </div>
        <!-- Contact Section -->
        <div id="contact">
          <h3>Contact.<hr></h3>
          <p>Feel free to contact me on my social media.</p>
          <div class="social-media">
            <a href="{{ $codepenLink ?? '#' }}" target="_blank"><i class='fab fa-codepen'></i></a>
            <a href="{{ $twitterLink ?? '#' }}" target="_blank"><i class='fab fa-twitter'></i></a>
            <a href="{{ $githubLink ?? '#' }}" target="_blank"><i class='fab fa-github'></i></a>
            <a href="{{ $linkedinLink ?? '#' }}" target="_blank"><i class='fab fa-linkedin-in'></i></a>
            <a href="{{ $youtubeLink ?? '#' }}" target="_blank"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </main>
      <!-- Footer -->
      <footer class="copyright">© 2020 
        <a href="{{ $replLink ?? 'https://portifolio-jvp0.onrender.com/' }}" target="_blank">{{ $replAuthor ?? 'Estevão Gabriel Oliveira' }}</a>
      </footer>
    </div>
    <!-- Repl.it Badge Script -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script>
  </body>
</html>

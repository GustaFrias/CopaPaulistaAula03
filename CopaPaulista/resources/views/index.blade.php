<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeonato Paulista | SiteOficial</title>
    <link href="{{asset('build/assets/styles/styles.css')}}" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    
</head>
<body>
   <header>
        <nav id="navbar">
            <div id="nav_logo">
            <img src="{{asset('build/assets/img/logo.jpg')}}">
            </div>
                <ul id="nav_list">
                    <li class="nav-item">
                        <a href="#home">Artilheiros</a>
                    </li>
                    <li class="nav-item">
                        <a href="#service">Sala Do Campeão</a>
                    </li>
                </ul>
            </nav>
    </header>
    <main id="content">
        <section id="home">
            <div id="cta">
                <h1 class="title">Conheça o Paulistão do 
                    <span>Povo</span>
                </h1>
                <p class="description">O Campeonato Paulista, também conhecido como Paulistão, é o principal campeonato de futebol do estado de São Paulo, 
                     organizado pela Federação Paulista de Futebol (FPF). É um dos campeonatos estaduais mais antigos e tradicionais do Brasil, com início em 1902.
                     O campeonato reúne os principais clubes do estado, que disputam o título de campeão paulista a cada ano. 
                </p>

                <div id="cta_buttons">
                    <a href="" class="phone_button">
                        <button class="btn-default">
                        <i class="fa-brands fa-whatsapp"></i>
                        </button>
                        (11) 2189-7000
                    </a>
                    <a href="tel:+55(82)99347-7707" class="phone_button">                        
                        <button class="btn-default">
                            <i class="fa-solid fa-phone"></i>
                        </button>
                        SAC (11) 2189-7000
                    </a>
                </div>
                <div class="social-media-buttons">
                    <a href="">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                </div>
            </div>

            <div id="banner">
                <img src="{{asset('build/assets/img/banner.webp')}}" alt="">
            </div>
        </section>
        <footer>
            <div id="footer_items">
                <span id="copyright">
                    © 2025 CampeonatoPaulista
                </span>
            </div>
        </footer>
</body>
</html>
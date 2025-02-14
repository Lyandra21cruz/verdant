<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lyandra</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    /* Estilização do botão de voltar ao topo */
    .scroll-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #9fb6ffcb;
        /* Cor principal do seu site */
        color: white;
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s, visibility 0.3s, transform 0.3s;
    }

    .scroll-top.visible {
        opacity: 1;
        visibility: visible;
        transform: scale(1);
    }

    .scroll-top:hover {
        background-color: #9fb6f0;
        /* Cor ligeiramente mais escura para o hover */
    }

    /* Estilização do menu responsivo */
    .nav-toggle {
        display: none;
        /* Esconde o botão no desktop */
        background-color: #9fb6ffcb;
        color: white;
        border: none;
        padding: 10px 15px;
        font-size: 18px;
        cursor: pointer;
        border-radius: 5px;
    }

    .nav-menu {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .nav-menu li {
        margin-right: 15px;
    }

    .nav-menu a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
        transition: color 0.3s;
    }

    .nav-menu a:hover {
        color: #9fb6ffcb;
        text-shadow: 0 0 5px #ffffff94, 0 0 10px #ffffff94, 0 0 15px #ffffff94, 0 0 20px #ffffff94;
    }

    /* Estilos para dispositivos móveis */
    @media (max-width: 768px) {
        .nav-toggle {
            display: block;
            /* Mostra o botão de alternância no mobile */
        }

        .nav-menu {
            display: none;
            /* Esconde o menu inicialmente */
            flex-direction: column;
            background-color: white;
            position: absolute;
            top: 60px;
            /* Alinha abaixo do cabeçalho */
            right: 0;
            left: 0;
            padding: 20px;
            border-top: 2px solid #05632ccb;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .nav-menu.active {
            display: flex;
            /* Exibe o menu ao clicar no botão */
        }

        .nav-menu li {
            margin-bottom: 15px;
        }

        .nav-menu a {
            color: #333;
            text-align: center;
        }
    }
</style>

<body>

    <section class="section home" id="home">
    <ul class="nav-menu">
            <li><a href="../index.php">•Voltar para pagina incial</a></li>
        </ul>
        <h2>Projeto evolução</h2>
        <h2>☸ HUMANAS ☸</h2>
        <p>"Até os momentos de silêncio carregam a força de uma obra inacabada."</p>
    </section>


    <div class="container">
        <div class="image">
            <img src="img/psicologia.png" alt="Exemplo 1">
        </div>
        <div class="caption">
            <h2>Primeiro Projeto</h2>
            <p>Neste primeiro projeto apresentado, escolhi o tema de Psicologia. No processo, me recordo de não ter
                muitas ideas para opções de cores e havia escolhido algo simples que atualmente não escolheria; e a
                estilização por inteira, o layout em branco e pequeno, hoje vejo que não faz parte do meu conceito de
                personalizar meus projetos. Havia muitas duvidas sobre paletas de cores, utilização de imagens,
                estrutura e organização das informações coletadas.</p>
        </div>
    </div>

    <div class="container reverse">
        <div class="caption">
            <h2>Projeto Atual</h2>
            <p>Neste projeto, foi sobre uma personalidade de nossa escolha. Neste atual, aproveitei melhor a
                personalização,
                utilizei um pouco de JavaScript para a animação do site, soube utilizar melhor as paletas de cores e
                imagem, .</p>
        </div>
        <div class="image">
            <img src="img/chico.png" alt="Exemplo 2">
        </div>
    </div>
    <br>
    <br>
    <div class="evolution-container">
        <img src="img/gira.png" alt="Imagem Evolução" class="mini-image">
        <h2>Minha Jornada de Evolução</h2>
        <p>
            Durante o curso, percebi que minha evolução foi uma jornada cheia de descobertas. No início,
            minha abordagem era muito básica, limitada e muitas vezes com dificuldades na escolha de cores e layout.
            Hoje, sinto que desenvolvi um olhar mais apurado para os detalhes, sabendo equilibrar criatividade e
            funcionalidade. Entendi a importância de trabalhar com boas práticas de desenvolvimento, e aprendi
            a organizar melhor as informações, usar imagens de forma estratégica e criar uma experiência mais rica
            e visualmente atrativa.
        </p>
        <p>
            A cada projeto, conquistei novas habilidades, incluindo o uso de linguagens como HTML e CSS, além de
            explorar a integração com bancos de dados. Esse aprendizado me deu confiança para enfrentar
            desafios maiores, construir sites mais robustos e transformar ideias em realidade.
        </p>
    </div>

    <footer class="vangogh-footer-3">
        <div class="footer-content">
            <h2>Lyandra Camille Da Silva Cruz</h2>
            <p>"Eu estou sempre fazendo o que não posso fazer para aprender como fazer."</p>
            <br>
            <p>@dev-2024</p>
        </div>
    </footer>


    <!-- Botão de Voltar ao Topo -->
    <button class="scroll-top">&#8593;</button>

    <script>
        // JavaScript para o botão de voltar ao topo
        const scrollTopBtn = document.querySelector('.scroll-top');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 200) {
                scrollTopBtn.classList.add('visible');
            } else {
                scrollTopBtn.classList.remove('visible');
            }
        });

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // JavaScript para o menu responsivo
        const navToggle = document.querySelector('.nav-toggle');
        const navMenu = document.querySelector('.nav-menu');

        navToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    </script>
</body>

</html>
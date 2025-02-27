<?php

session_start();

if (isset($_SESSION['logado'])) {
    require_once __DIR__ . '\app\controllers\CarrinhoController.php';

    $carrinho = new CarrinhoController();
    $_SESSION['qtd-carrinho'] = $carrinho->buscarTotal($_SESSION['id_usuario']);
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós | Verdant</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>

<body class="sobre">
    <header class="header">
        <div class="logo-container">
            <a href="index.php"> <img src="public/img/download.png" alt="Verdant Logo" class="logo"></a>
        </div>
        <h2 class="brand-name">VERDANT</h2>
        <div class="menu-icon" onclick="toggleMenu()">
            <div></div><a href="carrinho.php"><i class="fa-solid fa-cart-shopping fa-2xl" style='color: #fff' ;></i></a>
            <div class="quantidade-carrinho" id="quantidade-carrinho"><?= $_SESSION['qtd-carrinho'] ?? 0 ?></div>
        </div>

    </header>
    <div class="menu">
        <a href="index.php">INÍCIO</a>
        <a href="sobre.php">EMPRESA</a>
        <a href="app/views/avaliacao/avaliacao.php">FEEDBACKS</a>
        <?php
        if (isset($_SESSION['logado'])) {
            echo "<a href='app/views/usuario/logout.php'><i class='fas fa-sign-in-alt' style='rotate: 180deg;'></i> SAIR</a>";
        } else {
            echo "<a href='login.php'><i class='fas fa-sign-in-alt'></i> ENTRAR</a>";
        }
        ?>
    </div>

    <div class="linha-verde"></div>
    <br>
    <div class="carousel">
        <button class="carousel-btn prev" onclick="prevSlide()">&#10094;</button>
        <div class="carousel-container" id="carousel">
            <img src="public/img/7.jpg" alt="Imagem 1">
            <img src="public/img/2.jpg" alt="Imagem 2">
            <img src="public/img/9.jpg" alt="Imagem 3">
            <img src="public/img/6.jpg" alt="Imagem 4">
        </div>
        <button class="carousel-btn next" onclick="nextSlide()">&#10095;</button>
        <div class="indicators"></div>
    </div>
    <section class="about">
        <h2>Quem Somos</h2>
        <p>❃A Verdant é uma empresa comprometida com sustentabilidade e inovação.
            Criamos soluções ecológicas para um mundo melhor, trazendo produtos naturais e sustentáveis para o dia a
            dia.</p>
    </section>
    <section class="mission-vision-values">
        <div class="card">
            <i class="fas fa-globe"></i>
            <h3>MISSÃO</h3>
            <p>❃Promover um mundo sustentável por meio de produtos ecológicos e responsáveis.</p>
        </div>
        <div class="card">
            <i class="fas fa-eye"></i>
            <h3>VISÃO</h3>
            <p>❃Ser referência global em soluções sustentáveis para um planeta melhor.</p>
        </div>
        <div class="card">
            <i class="fas fa-heart"></i>
            <h3>VALORES</h3>
            <p>❃Respeito ao meio ambiente, ética e inovação contínua.</p>
        </div>
    </section>
    <section class="about">
        <h2>Por que Escolher a Verdant?</h2>
        <div class="benefits">
            <div class="benefit">
                <i class="fas fa-leaf"></i>
                <b>
                    <h3>100% SUSTENTÁVEL</h3>
                </b>
                <p>❃Nossos produtos são feitos com materiais recicláveis e orgânicos.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-recycle"></i>
                <b>
                    <h3>IMPACTO POSITIVO</h3>
                </b>
                <p>❃Apoiamos projetos ambientais e comunidades locais.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-star"></i>
                <b>
                    <h3>QUALIDADE GARANTIDA</h3>
                </b>
                <p>❃Produtos testados e aprovados para um consumo consciente.</p>
            </div>
        </div>
    </section><br><br>
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>Sobre nós</h3>
                <p>Somos uma empresa comprometida com a sustentabilidade e inovação. Nossa missão é trazer soluções
                    ecológicas e eficientes para o futuro.</p>
            </div>

            <div class="footer-section">
                <h3>Links rápidos</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="sobre.php">Empresa</a></li>
                    <li><a href="app/views/compra/index.php">Venda</a></li>
                    <li><a href="app/views/compra/feedback.php">Feedbacks</a></li>
                    <li><a href="app/views/produtos/">Cadastre um produto</a></li>
                    <li><a href="cadastro.php">Sair</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Contato</h3>
                <p>Endereço: Rua Exemplo, 123, São Paulo, SP</p>
                <p>Telefone: (11) 1234-5678</p>
                <p>Email: contato@verdant.com</p>
            </div>

            <div class="footer-section">
                <h3>Inscreva-se para novidades</h3>
                <form action="#" method="POST">
                    <input type="email" placeholder="Digite seu e-mail" required>
                    <button type="submit">Inscrever-se</button>
                </form>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2025 Verdant. Todos os direitos reservados.</p>
                <div class="social-media">
                    <a href="#" target="_blank" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            const menuIcon = document.querySelector('.menu-icon');
            const menu = document.querySelector('.menu');
            menuIcon.classList.toggle('active');
            menu.classList.toggle('active');
        }
        let currentIndex = 0;
        function moveSlide() {
            const carousel = document.getElementById("carousel");
            const images = carousel.children;
            const totalImages = images.length;
            currentIndex = (currentIndex + 1) % totalImages;
            carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
        }
        setInterval(moveSlide, 3000);
    </script>

</body>

</html>
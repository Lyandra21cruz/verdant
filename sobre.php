<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós | Verdant</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="sobre">

<header class="header">       
    <div class="logo-container">
        <img src="public/css/img/logo.png" alt="Verdant Logo" class="logo">
    </div>
    <div class="menu-icon" onclick="toggleMenu()">
        <div></div>
        <div></div>
        <div></div>
    </div>
</header>

<div class="menu">
    <a href="index.php">Início</a>
    <a href="sobre.php">Sobre</a>
    <a href="#">Venda</a>
    <a href="#">Feedbacks</a>
    <a href="../../index.php">Carrinho</a>
    <a href="#">Loja</a>
</div>
<br><br>
<div class="carousel">
    <div class="carousel-container" id="carousel">
        <img src="public/css/img/2.jpg" alt="Imagem 1">
        <img src="public/css/img/3.jpg" alt="Imagem 2">
        <img src="public/css/img/4.jpg" alt="Imagem 3">
        <img src="public/css/img/5.jpg" alt="Imagem 4">
    </div>
</div>

<script>
    function toggleMenu() {
        document.querySelector('.menu').classList.toggle('active');
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

<img src="public/css/img/flor.png" alt="Flor" class="center-image">

<section class="about">
    <h2>Quem Somos</h2>
    <p>A Verdant é uma empresa comprometida com sustentabilidade e inovação. 
        Criamos soluções ecológicas para um mundo melhor, trazendo produtos naturais e sustentáveis para o dia a dia.</p>
</section>

<section class="mission-vision-values">
    <div class="card">
        <i class="fas fa-globe"></i>
        <h3>Missão</h3>
        <p>Promover um mundo sustentável por meio de produtos ecológicos e responsáveis.</p>
    </div>
    <div class="card">
        <i class="fas fa-eye"></i>
        <h3>Visão</h3>
        <p>Ser referência global em soluções sustentáveis para um planeta melhor.</p>
    </div>
    <div class="card">
        <i class="fas fa-heart"></i>
        <h3>Valores</h3>
        <p>Respeito ao meio ambiente, ética e inovação contínua.</p>
    </div>
</section>

<footer>
    <p>&copy; 2025 Verdant. Todos os direitos reservados.</p>
    <div class="social-media">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
</footer>

<script>
    function toggleMenu() {
        const menuIcon = document.querySelector('.menu-icon');
        const menu = document.querySelector('.menu');
        menuIcon.classList.toggle('active');
        menu.classList.toggle('active');
    }
</script>

</body>
</html>

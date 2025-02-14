<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós | Verdant</title>
    <link rel="stylesheet" href="estilo.css">
   
</head>
<body class="sobre">

    <!-- Menu Lateral -->
    <div class="menu">
        <a href="#">Início</a>
        <a href="sobre.php">Sobre</a>
        <a href="#">Venda</a>
        <a href="#">Feedbacks</a>
        <a href="#">Carrinho</a>
        <a href="#">Loja</a>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="logo-container">
            <img src="img/logo.png" alt="Verdant Logo" class="logo">
            <span class="brand-name">Verdant</span>
        </div>
        <div class="menu-icon" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </header>

    <!-- Carrossel -->
    <div class="carousel">
        <div class="carousel-container">
            <img src="img/2.jpg" alt="Imagem 1">
            <img src="img/3.jpg" alt="Imagem 2">
            <img src="img/4.jpg" alt="Imagem 3">
        </div>
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
    </div>

    <!-- Seção Sobre -->
    <section class="about">
        <h2>Quem Somos</h2>
        <p>
            A Verdant é uma empresa comprometida com sustentabilidade e inovação. Criamos soluções ecológicas para um mundo melhor, trazendo produtos naturais e sustentáveis para o dia a dia.
        </p>
    </section>
</div> <br><br><br><br>


    <script>
        // Menu Hambúrguer
        function toggleMenu() {
            document.querySelector('.menu').classList.toggle('active');
            document.querySelector('.menu-icon').classList.toggle('active');
        }

        // Carrossel de imagens
        let index = 0;
        const slides = document.querySelectorAll(".carousel-container img");

        function moveSlide(step) {
            index += step;
            if (index < 0) {
                index = slides.length - 1;
            } else if (index >= slides.length) {
                index = 0;
            }
            document.querySelector(".carousel-container").style.transform = `translateX(${-index * 100}%)`;
        }

        setInterval(() => moveSlide(1), 4000); // Troca automática a cada 4s
    </script>

</body>
</html>

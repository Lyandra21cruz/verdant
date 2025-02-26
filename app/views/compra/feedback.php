<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="feed.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Feedbacks</title>
</head>

<body>

    <header class="header">
        <div class="logo-container">
            <a href="../../index.php">
                <img src="../../../public/img/download.png" alt="Verdant Logo" class="logo">
            </a>
        </div>
        <h2 class="brand-name">VERDANT</h2>
        <div class="menu-icon" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <a href="../../carrinho.php">
                <img src="../../../public/img/carrinho.png" alt="Carrinho" width="90px">
            </a>
            <div></div>
            <div></div>
        </div>
    </header>

    <nav class="menu">
        <a href="../../../index.php">INÍCIO</a>
        <a href="../../../sobre.php">EMPRESA</a>
        <a href="index.php">VENDA</a>
        <a href="feedback.php">FEEDBACKS</a>
        <?php
        if (isset($_SESSION['logado'])) {
            echo "<a href='app/views/usuario/logout.php'><i class='fas fa-sign-in-alt' style='rotate: 180deg;'></i> SAIR</a>";
        } else {
            echo "<a href='login.php'><i class='fas fa-sign-in-alt'></i> ENTRAR</a>";
        }
        ?>
    </nav>

    <div class="linha-verde"></div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const text = "VERDANT";
            const container = document.getElementById("curvedText");
            const radius = -150;
            const angleStep = 180 / text.length;

            for (let i = 0; i < text.length; i++) {
                const span = document.createElement("span");
                span.innerText = text[i];
                const angle = i * angleStep;
                const x = Math.cos((angle * Math.PI) / 180) * radius;
                const y = Math.sin((angle * Math.PI) / 180) * radius;
                span.style.transform = `translate(${x}px, ${y}px) rotate(${angle}deg)`;
                container.appendChild(span);
            }
        });
    </script>
    <br><br>
    <section class="feedback-section">

        <div class="bola">
            <h2>FEEDBACKS</h2>
        </div>

        <div class="container">
            <div class="form">
                <form action="enviar_feedback.php" method="POST">
                    <div>
                        <input type="text" name="nome" placeholder="Nome" required>
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="E-mail" required>
                    </div>
                    <div>
                        <textarea name="comentario" placeholder="Escreva seu comentário..." rows="5"
                            required></textarea>
                    </div>

                    <div class="buto">
                        <button type="submit">Enviar</button>
                    </div>
                </form>
            </div>
            <h2 class="brand-name">VERDANT</h2>
            <div class="menu-icon" onclick="toggleMenu()">
                <div></div>
                <div></div>
                <a href="carrinho.php">
                    <i class="fa-solid fa-cart-shopping fa-2xl" style='color: #fff' ;></i>
                </a>
                <div></div>
                <div></div>
            </div>
        </div>
    </section>
    <br><br><br>
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
                    <li><a href="../../index.php">Home</a></li>
                    <li><a href="../../sobre.php">Empresa</a></li>
                    <li><a href="verdantp/compra/index.php">Venda</a></li>
                    <li><a href="verdantp/compra/feedback.php">Feedbacks</a></li>
                    <li><a href="../../cadastro.php">Sair</a></li>
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

</body>

</html>
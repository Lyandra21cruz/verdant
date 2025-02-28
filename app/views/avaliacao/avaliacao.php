<?php

session_start();

require_once 'C:/Turma2/xampp/htdocs/verdant/config/config.php';
require_once 'C:/Turma2/xampp/htdocs/verdant/app/controllers/AvaliacaoController.php';

$avaliacaoController = new AvaliacaoController();
$avaliacoes = $avaliacaoController->listarAvaliacoes();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nome_cliente'], $_POST['nome_produto'], $_POST['feedback'], $_POST['nota'])) {
    $avaliacaoController->criarAvaliacao($_POST['nome_cliente'], $_POST['nome_produto'], $_POST['feedback'], $_POST['nota']);
    header("Location: avaliacao.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliações</title>
    <link rel="stylesheet" href="feed.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
            <div></div><a href="../../../carrinho.php"><i class="fa-solid fa-cart-shopping fa-2xl" style='color: #fff' ;></i></a>
            <div class="quantidade-carrinho" id="quantidade-carrinho"><?= $_SESSION['qtd-carrinho'] ?? 0 ?></div>
        </div>
    </header>

    <div class="menu">
        <a href="../../../index.php">INÍCIO</a>
        <a href="../../../sobre.php">EMPRESA</a>
        <a href="../avaliacao/avaliacao.php">FEEDBACKS</a>
        <?php
        if (isset($_SESSION['logado'])) {
            echo "<a href='app/views/usuario/logout.php'><i class='fas fa-sign-in-alt' style='rotate: 180deg;'></i> SAIR</a>";
        } else {
            echo "<a href='login.php'><i class='fas fa-sign-in-alt'></i> ENTRAR</a>";
        }
        ?>
    </div>

    <div class="linha-verde"></div>
    <section class="feedback-section">
        <div class="bola">
            <h2>FEEDBACKS</h2>
        </div>

        <div class="container">
            <form method="POST">
                <input type="hidden" name="nome_cliente" value="1">
                <input type="hidden" name="nome_produto" value="1">

                <div>
                    <input type="text" name="nome_cliente" placeholder="Nome" required>
                </div>
                <div>
                    <input type="email" name="email_cliente" placeholder="E-mail" required>
                </div>
                <div>
                    <textarea name="comentario" placeholder="Escreva seu comentário..." rows="5" required></textarea>
                </div>
                <div>
                    <input type="number" name="nota" min="1" max="5" placeholder="Nota (1-5)" required>
                </div>

                <div class="buto">
                    <button type="submit">Enviar</button>
                </div>
            </form>

        </div>
        </div>
    </section>

    <h2>Avaliações Recentes</h2>
    <ul>
        <?php foreach ($avaliacoes as $avaliacao): ?>
            <li><strong>Nota:</strong> <?= $avaliacao['nota'] ?> - <strong>Feedback:</strong>
                <?= htmlspecialchars($avaliacao['feedback']) ?></li>
        <?php endforeach; ?>
    </ul>

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
<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VERDANT</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <header class="header">
        <div class="logo-container">
            <a href="../cadastro.php"> <img src="public/img/download.png" alt="Verdant Logo" class="logo"></a>
        </div>
        <h1 class="brand-name">VERDANT</h1>
        <div class="menu-icon" onclick="toggleMenu()">
            <div></div><a href="carrinho.php"><i class="fa-solid fa-cart-shopping fa-2xl" style='color: #fff' ;></i></a>
            <div class="quantidade-carrinho" id="quantidade-carrinho"></div>
        </div>
    </header>

    <div class="menu">
        <a href="index.php">INÍCIO</a>
        <a href="sobre.php">EMPRESA</a>
        <a href="app/views/compra/index.php">VENDA</a>
        <a href="app/views/compra/feedback.php">FEEDBACKS</a>
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
    <div class="container">
        <h1><i class="fas fa-shopping-cart"></i> MEU CARRINHO</h1>
        <table>
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Total</th>
                    <th>Remover</th>
                </tr>
            </thead>
            <tbody>
                <!-- Os produtos serão carregados dinamicamente do banco de dados -->
            </tbody>
        </table>
        <div class="cart-summary">
            Total: <span>R$ 0,00</span>
        </div>
        <div class="payment-methods">
            <h3>Formas de Pagamento</h3>
            <i class="fab fa-cc-visa"></i>
            <i class="fab fa-cc-mastercard"></i>
            <i class="fab fa-cc-amex"></i>
            <i class="fab fa-cc-paypal"></i>
            <i class="fab fa-cc-stripe"></i>
            <i class="fas fa-barcode"></i>
        </div>
        <button class="checkout"><i class="fas fa-credit-card"></i> Finalizar Compra</button>
    </div>
    <br><br><br><br><br><br><br><br><br>
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
    </footer
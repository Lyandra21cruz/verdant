<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <title>Cadastre um produto - Verdant</title>
</head>

<body>

    <header class="header">
        <div class="logo-container">
            <a href="../../../index.php"> <img src="../../../public/img/download.png" alt="Verdant Logo"
                    class="logo"></a>
        </div>
        <h1 class="brand-name">VERDANT</h1>
        <div class="menu-icon" onclick="toggleMenu()">
            <div></div><a href="carrinho.php"><i class="fa-solid fa-cart-shopping fa-2xl" style='color: #fff' ;></i></a>
            <div class="quantidade-carrinho" id="quantidade-carrinho"></div>
        </div>
    </header>

    <div class="menu">
        <a href="../../../index.php">INÍCIO</a>
        <a href="../../../sobre.php">EMPRESA</a>
        <a href="feedback.php">FEEDBACKS</a>
        <?php
        if (isset($_SESSION['logado'])) {
            echo "<a href='../usuario/logout.php'><i class='fas fa-sign-in-alt' style='rotate: 180deg;'></i> SAIR</a>";
        } else {
            echo "<a href='login.php'><i class='fas fa-sign-in-alt'></i> ENTRAR</a>";
        }
        ?>
    </div>

    <div class="linha-verde"></div>
    <br>


    <div class="container">
        <main>
            <h1>CADASTRE SEU PRODUTO</h1>

            <section class="checkout">
                <form class="checkout-form" action="cadastrar.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nome_produto">Nome do produto:</label>
                        <input type="text" id="nome_produto" name="nome_produto">
                    </div>

                    <div class="form-group">
                        <label for="descricao_produto">Descrição do produto:</label>
                        <input type="text" id="descricao_produto" name="descricao_produto">
                    </div>

                    <div class="form-group">
                        <label for="imagem_produto">Imagem do produto:</label>
                        <input type="file" name="imagem_produto[]" id="imagem_produto">
                    </div>

                    <div class="form-group">
                        <label for="preco_produto">Preço:</label>
                        <input type="number" name="preco_produto" id="preco_produto" step=".01">
                    </div>

                    <div class="form-group">
                        <label for="estoque_produto">Estoque:</label>
                        <input type="number" name="estoque_produto" id="estoque_produto">
                    </div>


                    <button type="submit" class="btn-comprar">Cadastrar produto</button>
                </form>
            </section>
    </div>

    <!-- Informações Extras Fora do Container -->
    <section class="extra-info">
        <div class="shipping-info">
            <h3>Opções de Frete</h3>
            <p>Escolha o método de envio que melhor se adequa à sua necessidade:</p>
            <ul>
                <li><strong>Envio Expresso:</strong> 1-2 dias úteis - R$ 25,00</li>
                <li><strong>Envio Normal:</strong> 5-7 dias úteis - R$ 10,00</li>
            </ul>
        </div>

        <div class="privacy-policy">
            <h3>Política de Privacidade</h3>
            <p>Valorizamos sua privacidade. Seus dados serão utilizados exclusivamente para o processamento da compra e
                não serão compartilhados com terceiros, exceto conforme exigido por lei.</p>
        </div>

        <div class="security">
            <h3>Segurança</h3>
            <p>Nosso site utiliza tecnologia de ponta para garantir a segurança das suas transações online. Dados
                sensíveis são criptografados para garantir a sua proteção.</p>
        </div>
    </section>
    </main>

    <br><br>

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
                    <li><a href="index.php">Cadastre um produto</a></li>
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

    <script>
        function toggleMenu() {
            document.querySelector('.menu').classList.toggle('active');
            document.querySelector('.menu-icon').classList.toggle('active');
        }
    </script>

</body>

</html>
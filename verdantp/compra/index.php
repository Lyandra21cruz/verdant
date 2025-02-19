<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>

<body>

    <header class="header">
        <div class="logo-container">
            <!-- Aqui pode ir o logo, se necessário -->
        </div>
        <div class="menu-icon" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </header>

    <div class="menu">
        <a href="../../index.php">Início</a>
        <a href="../../sobre.php">Sobre</a>
        <a href="#">Venda</a>
        <a href="#">Feedbacks</a>
        <a href="../../index.php">Carrinho</a>
        <a href="#">Loja</a>
    </div>

    <div class="container2">
        <div class="cabeça">
            <form class="principal" method="POST">
                <div class="input">
                    <input type="text" class="borda" placeholder="Seu Nome Completo">
                </div>

                <div class="input">
                    <input type="text" class="borda" placeholder="PIN do Produto">
                </div>

                <div class="input">
                    <input type="text" class="borda" placeholder="Forma de Pagamento">
                </div>

                <div class="input">
                    <input type="text" class="borda" placeholder="CEP da Casa">
                </div>

                <a href="venda.php" class="venda-button">Vender</a>
            </form>
        </div>
    </div>

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
            document.querySelector('.menu').classList.toggle('active');
            document.querySelector('.menu-icon').classList.toggle('active');
        }
    </script>
</body>

</html>

<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_SESSION['logado'])) {
        if ($_POST["adicionar"] == true) {
            require_once __DIR__ . '\app\controllers\CarrinhoController.php';
            $carrinho = new CarrinhoController();
    
            $carrinho->adicionarItemCarrinho($_SESSION['id_usuario'], $_POST['id_produto'], $_POST['qtd_produto']);
        }
    } else {
        header('location: login.php');
    }
}

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


    <!--- PRODUTOS --->
    <div class="container">

        <div class="linha-produtos">
            <?php
            require_once 'C:\Turma2\xampp\htdocs\verdant\app\controllers\ProdutoController.php';
            $produto = new ProdutoController();
            $produtos = $produto->listarProdutos();


            foreach ($produtos as $produto) {
                ?>

            <div class="corpoproduto">
                <div class="imgproduto">
                    <img src="public/img/produtos/<?= $produto['imagem_produto'] ?>"
                        alt="<?= $produto['nome_produto'] ?>" class="produtominiatura">
                </div>
                <div class="titulo">
                    <p>
                        <?= $produto['nome_produto'] ?>
                    </p>
                    <h2>R$
                        <?= number_format($produto['preco_produto'], 2, ",", ".") ?>
                    </h2>
                </div>
                <div class="descricao">
                    <p>
                        <?= $produto['descricao_produto'] ?>
                    </p>
                </div>
                <div class="botoes-container">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <input type="hidden" name="adicionar" value="true">
                        <input type="hidden" name="id_produto" value="<?= $produto['id_produto'] ?>">
                        <button type="submit" class="btn-comprar"><i class="fa-solid fa-cart-shopping"></i></button>
                        <input type="number" name="qtd_produto" id="quantidade" value="1" min="1" max="10"
                            class="input-qtd-produto">
                    </form>
                </div>

            </div>

            <?php
            }

            ;
            ?>

        </div>

    </div>

    </div>
    </div>
    <br><br>
    <br>
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

                    <?php

                    if (!isset($_SESSION['permissoes']['vendedor'])) {
                        $vendedor = null;
                    } else {
                        $vendedor = $_SESSION['permissoes']['vendedor'];
                    }

                    if ($vendedor == 1) {
                        echo '<li><a href="app/views/produtos/">Cadastre um produto</a></li>';
                    } elseif (isset($_SESSION['logado'])) {
                        echo '<li><a href="app/views/usuario/vendedor.php">Torne-se um vendedor</a></li>';
                    }
                    ?>

                    <?php
                    if (isset($_SESSION['logado'])) {
                        echo "<li><a href='app/views/usuario/logout.php'>Sair</a></li>";
                    } else {
                        echo "<li><a href='login.php'>Entrar</a></li>";
                    }
                    ?>
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
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
            <a href="../cadastro.php"> <img src="verdantp/public/img/download.png" alt="Verdant Logo" class="logo"></a>
        </div>
        <h1 class="brand-name">VERDANT</h1>
        <div class="menu-icon" onclick="toggleMenu()">
            <div></div>
            <div></div><a href="carrinho.php"><i class="fa-solid fa-cart-shopping fa-2xl" style='color: #fff';></i></a>
            <div></div>
            <div></div>
        </div>
    </header>

    <div class="menu">
        <a href="index.php">INÍCIO</a>
        <a href="sobre.php">EMPRESA</a>
        <a href="verdantp/compra/index.php">VENDA</a>
        <a href="verdantp/compra/feedback.php">FEEDBACKS</a>
        <?php
        if (isset($_SESSION['logado'])) {
            echo "<a href='app/views/usuario/logout.php'><i class='fas fa-sign-in-alt' style='rotate: 180deg;'></i> SAIR</a>";
        } else {
            echo "<a href='login.php'><i class='fas fa-sign-in-alt'></i> ENTRAR</a>";
        }
        ?></a>
        </a>


        </a>

    </div>
    <div class="linha-verde"></div>
    <br>


    <!--- PRODUTOS --->
    <div class="container">
        <div class="linha-produtos">
            <div class="corpoproduto">
                <div class="imgproduto">
                    <img src="verdantp/public/img/produto-1.jpg" alt="Bolsa Sustentável" class="produtominiatura">
                </div>
                <div class="titulo">
                    <p>Bolsa Sustentável</p>
                    <h2>R$42,45</h2>
                </div>
                <div class="descricao">
                    <p>Feita com materiais reciclados, essa bolsa é ideal para quem busca praticidade e sustentabilidade
                        no dia a dia.</p>
                </div>
                <div class="botoes-container">
                    <a href="../verdantp/compra/index.php" class="btn-comprar">Comprar</a>
                    <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45" class="btn-carrinho">
                        <img src="verdantp/public/img/carrinho.png" alt="Carrinho">
                    </a>
                </div>

            </div>

            <div class="corpoproduto">
                <div class="imgproduto">
                    <img src="verdantp/public/img/produto-2.jpg" alt="Vela Dalit" class="produtominiatura">
                </div>
                <div class="titulo">
                    <p>Vela Dalit</p>
                    <h2>R$17,20</h2>
                </div>
                <div class="descricao">
                    <p>Vela artesanal feita com cera natural e aromas relaxantes. Perfeita para criar um ambiente
                        aconchegante.</p>
                </div>
                <div class="botoes-container">
                    <a href="../verdantp/compra/index.php">
                        <button class="btn-comprar">Comprar</button>
                    </a>
                    <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45" class="btn-carrinho">
                        <img src="verdantp/public/img/carrinho.png" alt="Carrinho" width="50px">
                    </a>
                </div>
            </div>

            <div class="corpoproduto">
                <div class="imgproduto">
                    <img src="verdantp/public/img/produto-3.jpg" alt="Mini Estufa" class="produtominiatura">
                </div>
                <div class="titulo">
                    <p>Mini Estufa</p>
                    <h2>R$2.500</h2>
                </div>
                <div class="descricao">
                    <p>Ideal para quem deseja cultivar plantas em casa com controle de temperatura e umidade.</p>
                </div>
                <div class="botoes-container">
                    <a href="../verdantp/compra/index.php">
                        <button class="btn-comprar">Comprar</button>
                    </a>
                    <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45" class="btn-carrinho">
                        <img src="verdantp/public/img/carrinho.png" alt="Carrinho" width="50px">
                    </a>
                </div>
            </div>
        </div>

        <!--- PRODUTOS 2 --->
        <div class="container">
            <div class="linha-produtos">
                <div class="corpoproduto">
                    <div class="imgproduto">
                        <img src="verdantp/public/img/produto-4.jpg" alt="Lápis de Semente" class="produtominiatura">
                    </div>
                    <div class="titulo">
                        <p>Lápis de Semente</p>
                        <h2>R$1,05</h2>
                    </div>
                    <div class="descricao">
                        <p>Após o uso, plante o lápis e veja crescer uma linda planta. Feito com materiais
                            biodegradáveis.</p>
                    </div>
                    <div class="botoes-container">
                        <a href="../verdantp/compra/index.php">
                            <button class="btn-comprar">Comprar</button>
                        </a>
                        <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45"
                            class="btn-carrinho">
                            <img src="verdantp/public/img/carrinho.png" alt="Carrinho" width="50px">
                        </a>
                    </div>
                </div>

                <div class="corpoproduto">
                    <div class="imgproduto">
                        <img src="verdantp/public/img/produto-5.jpg" alt="Kit Auto Cuidado Naturalvegan"
                            class="produtominiatura">
                    </div>
                    <div class="titulo">
                        <p>Kit Auto Cuidado Naturalvegan</p>
                        <h2>R$50,00</h2>
                    </div>
                    <div class="descricao">
                        <p>Kit especial com produtos naturais para um autocuidado completo. Livre de químicos
                            agressivos.</p>
                    </div>
                    <div class="botoes-container">
                        <a href="../verdantp/compra/index.php">
                            <button class="btn-comprar">Comprar</button>
                        </a>
                        <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45"
                            class="btn-carrinho">
                            <img src="verdantp/public/img/carrinho.png" alt="Carrinho" width="50px">
                        </a>
                    </div>
                </div>


                <div class="corpoproduto">
                    <div class="imgproduto">
                        <img src="verdantp/public/img/produto-6.jpg" alt="Kit Sabonete e Bucha Natural"
                            class="produtominiatura">
                    </div>
                    <div class="titulo">
                        <p>Kit Sabonete e Bucha Natural</p>
                        <h2>R$37,00</h2>
                    </div>
                    <div class="descricao">
                        <p>Sabonete artesanal e bucha vegetal para um banho relaxante e ecológico.</p>
                    </div>
                    <div class="botoes-container">
                        <a href="../verdantp/compra/index.php">
                            <button class="btn-comprar">Comprar</button>
                        </a>
                        <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45"
                            class="btn-carrinho">
                            <img src="verdantp/public/img/carrinho.png" alt="Carrinho" width="50px">
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- PRODUTOS 3 -->
        <div class="container">
            <div class="linha-produtos">
                <div class="corpoproduto">
                    <div class="imgproduto">
                        <img src="verdantp/public/img/produtos7.jpg" alt="Bolsa Ecológica" class="produtominiatura">
                    </div>
                    <div class="titulo">
                        <p>Bolsa Ecológica</p>
                        <h2>R$32,45</h2>
                    </div>
                    <div class="descricao">
                        <p>Bolsa feita de algodão reciclado, perfeita para substituir sacolas plásticas.</p>
                    </div>
                    <div class="botoes-container">
                        <a href="../verdantp/compra/index.php">
                            <button class="btn-comprar">Comprar</button>
                        </a>
                        <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45"
                            class="btn-carrinho">
                            <img src="verdantp/public/img/carrinho.png" alt="Carrinho" width="50px">
                        </a>
                    </div>
                </div>

                <div class="corpoproduto">
                    <div class="imgproduto">
                        <img src="verdantp/public/img/produtos8.jpg" alt="Bolsa Térmica" class="produtominiatura">
                    </div>
                    <div class="titulo">
                        <p>Bolsa Térmica</p>
                        <h2>R$32,45</h2>
                    </div>
                    <div class="descricao">
                        <p>Bolsa sustentável com isolamento térmico para conservar alimentos e bebidas.</p>
                    </div>
                    <div class="botoes-container">
                        <a href="../verdantp/compra/index.php">
                            <button class="btn-comprar">Comprar</button>
                        </a>
                        <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45"
                            class="btn-carrinho">
                            <img src="verdantp/public/img/carrinho.png" alt="Carrinho" width="50px">
                        </a>
                    </div>
                </div>

                <div class="corpoproduto">
                    <div class="imgproduto">
                        <img src="verdantp/public/img/produtos9.jpg" alt="Bolsa de Juta" class="produtominiatura">
                    </div>
                    <div class="titulo">
                        <p>Bolsa de Juta</p>
                        <h2>R$32,45</h2>
                    </div>
                    <div class="descricao">
                        <p>Produzida com fibras naturais, resistente e estilosa para o dia a dia.</p>
                    </div>
                    <div class="botoes-container">
                        <a href="../verdantp/compra/index.php">
                            <button class="btn-comprar">Comprar</button>
                        </a>
                        <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45"
                            class="btn-carrinho">
                            <img src="verdantp/public/img/carrinho.png" alt="Carrinho" width="50px">
                        </a>
                    </div>
                </div>
            </div>

            <!-- PRODUTOS 4 -->
            <div class="container">
                <div class="linha-produtos">
                    <div class="corpoproduto">
                        <div class="imgproduto">
                            <img src="verdantp/public/img/produtos10.jpg" alt="Bolsa de Algodão Cru"
                                class="produtominiatura">
                        </div>
                        <div class="titulo">
                            <p>Bolsa de Algodão Cru</p>
                            <h2>R$32,45</h2>
                        </div>
                        <div class="descricao">
                            <p>Bolsa versátil e sustentável, feita de algodão natural sem tingimentos químicos.</p>
                        </div>
                        <div class="botoes-container">
                            <a href="../verdantp/compra/index.php">
                                <button class="btn-comprar">Comprar</button>
                            </a>
                            <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45"
                                class="btn-carrinho">
                                <img src="verdantp/public/img/carrinho.png" alt="Carrinho" width="50px">
                            </a>
                        </div>
                    </div>

                    <div class="corpoproduto">
                        <div class="imgproduto">
                            <img src="verdantp/public/img/produtos11.jpg" alt="Bolsa de Papel Kraft"
                                class="produtominiatura">
                        </div>
                        <div class="titulo">
                            <p>Bolsa de Papel Kraft</p>
                            <h2>R$32,45</h2>
                        </div>
                        <div class="descricao">
                            <p>Bolsa ecológica biodegradável, ideal para pequenas compras e presentes.</p>
                        </div>
                        <div class="botoes-container">
                            <a href="../verdantp/compra/index.php">
                                <button class="btn-comprar">Comprar</button>
                            </a>
                            <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45"
                                class="btn-carrinho">
                                <img src="verdantp/public/img/carrinho.png" alt="Carrinho" width="50px">
                            </a>
                        </div>
                    </div>

                    <div class="corpoproduto">
                        <div class="imgproduto">
                            <img src="verdantp/public/img/produtos12.jpg" alt="Bolsa Compacta Reutilizável"
                                class="produtominiatura">
                        </div>
                        <div class="titulo">
                            <p>Bolsa Compacta Reutilizável</p>
                            <h2>R$32,45</h2>
                        </div>
                        <div class="descricao">
                            <p>Prática e dobrável, cabe no bolso e substitui sacolas plásticas descartáveis.</p>
                        </div>
                        <div class="botoes-container">
                            <a href="../verdantp/compra/index.php">
                                <button class="btn-comprar">Comprar</button>
                            </a>
                            <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45"
                                class="btn-carrinho">
                                <img src="verdantp/public/img/carrinho.png" alt="Carrinho" width="50px">
                            </a>
                        </div>
                    </div>
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
                    <li><a href="verdantp/compra/index.php">Venda</a></li>
                    <li><a href="verdantp/compra/feedback.php">Feedbacks</a></li>
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

</body>

</html>
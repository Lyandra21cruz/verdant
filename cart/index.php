<?php
<<<<<<< HEAD
//  if ($_SESSION['logado']) {
    
//  } else {
//     header('location: ../');
//  }
=======
>>>>>>> 420144dbb199f9731a6f41ba1bb57723fa6f8c63
ob_start();
require('./sheep_core/config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VERDANT</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<<<<<<< HEAD
<body>
<header class="header">
    <div class="logo-container">
      <a href="../index.php">   <img src="assets/img/download.png" alt="Verdant Logo" class="logo"></a>
    </div>
    <h1 class="brand-name">VERDANT</h1>
    <div class="menu-icon" onclick="toggleMenu()">
        <div></div>        <div></div><a href="carrinho.php"><img src="assets/img/carrinho.png" alt="" width= "90px"></a>
        <div></div>
        <div></div>
    </div>
</header>

<div class="menu">
        <a href="cart/index.php">INÍCIO</a>
        <a href="../sobre.php">EMPRESA</a>
        <a href="../verdantp/compra/index.php">VENDA</a>
        <a href="../verdantp/compra/feedback.php">FEEDBACKS</a>
=======
    <!--- TOPO --->
    <section class="section home" id="home">
        <div class="header">
            <div class="cart"><i class="fa fa-shopping-cart"></i>
                <p>0</p>
            </div>
        </div>

 <!--- BARRA LATERAL --->

 <div class="barra-lateral">

<div class="topocarrinho">
    <p>Meu Carrinho</p>
>>>>>>> 420144dbb199f9731a6f41ba1bb57723fa6f8c63
</div>
<div class="linha-verde"></div>
<br>

<<<<<<< HEAD
<!--- PRODUTOS --->
<div class="container">
    <div class="linha-produtos">
        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produto-1.jpg" alt="Bolsa Sustentável" class="produtominiatura">
            </div>
            <div class="titulo">
                <p>Bolsa Sustentável</p>
                <h2>R$42,45</h2>
            </div>
            <div class="descricao">
                <p>Feita com materiais reciclados, essa bolsa é ideal para quem busca praticidade e sustentabilidade no dia a dia.</p>
            </div>
            <div class="botoes-container">
    <a href="../verdantp/compra/index.php">
        <button class="btn-comprar">Comprar</button>
    </a>
    <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45" class="btn-carrinho">
        <img src="assets/img/carrinho.png" alt="Carrinho" width="50px">
    </a>
</div>

            </div>
        
        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produto-2.jpg" alt="Vela Dalit" class="produtominiatura">
            </div>
            <div class="titulo">
                <p>Vela Dalit</p>
                <h2>R$17,20</h2>
            </div>
            <div class="descricao">
                <p>Vela artesanal feita com cera natural e aromas relaxantes. Perfeita para criar um ambiente aconchegante.</p>
            </div>
            <div class="botoes-container">
    <a href="../verdantp/compra/index.php">
        <button class="btn-comprar">Comprar</button>
    </a>
    <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45" class="btn-carrinho">
        <img src="assets/img/carrinho.png" alt="Carrinho" width="50px">
    </a>
</div>
</div>
        
        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produto-3.jpg" alt="Mini Estufa" class="produtominiatura">
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
        <img src="assets/img/carrinho.png" alt="Carrinho" width="50px">
    </a>
</div>
</div></div>

  <!--- PRODUTOS 2 --->
  <div class="container">
    <div class="linha-produtos">
        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produto-4.jpg" alt="Lápis de Semente" class="produtominiatura">
            </div>
            <div class="titulo">
                <p>Lápis de Semente</p>
                <h2>R$1,05</h2>
            </div>
            <div class="descricao">
                <p>Após o uso, plante o lápis e veja crescer uma linda planta. Feito com materiais biodegradáveis.</p>
            </div>
            <div class="botoes-container">
    <a href="../verdantp/compra/index.php">
        <button class="btn-comprar">Comprar</button>
    </a>
    <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45" class="btn-carrinho">
        <img src="assets/img/carrinho.png" alt="Carrinho" width="50px">
    </a>
</div>
</div>
        
        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produto-5.jpg" alt="Kit Auto Cuidado Naturalvegan" class="produtominiatura">
            </div>
            <div class="titulo">
                <p>Kit Auto Cuidado Naturalvegan</p>
                <h2>R$50,00</h2>
            </div>
            <div class="descricao">
                <p>Kit especial com produtos naturais para um autocuidado completo. Livre de químicos agressivos.</p>
            </div>
            <div class="botoes-container">
    <a href="../verdantp/compra/index.php">
        <button class="btn-comprar">Comprar</button>
    </a>
    <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45" class="btn-carrinho">
        <img src="assets/img/carrinho.png" alt="Carrinho" width="50px">
    </a>
</div>
</div>

        
        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produto-6.jpg" alt="Kit Sabonete e Bucha Natural" class="produtominiatura">
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
    <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45" class="btn-carrinho">
        <img src="assets/img/carrinho.png" alt="Carrinho" width="50px">
    </a>
</div>
</div>
        </div>

=======
<!-- PRODUTO CARRINHO-->
<div class="item-carrinho">
<div class="linha-da-imagem">
    <img src="assets/img/produtos12.jpg" alt="" class="img-carrinho">
</div>
<p>Maquiagem</p>
<h2>R$34,50</h2>
<form action="filtros/excluir.php" method="post">
    <input type="hidden" name="id_produto" value="">
    <button type="submit" style="border:none; background: none;"><i class="fa fa-trash-o"></i></button>
</form>
</div>
<div class="item-carrinho-vazio">Seu Carrinho Está Vazio!</div>

<div class="rodape">
<h3>Total</h3>
<h2>R$34,50</h2>
</div>
</div>
<!-- FIM DO PRODUTO CARRINHO-->

<!--- FIM DA BARRA LATERAL --->

    </section>
    

    <div class="evolution-container">
        <img src="assets\img\flor.png" alt="" class="mini-image">
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!--- FIM DO TOPO --->

    <!--- PRODUTOS 1 --->

    <div class="container">
        <div class="linha-produtos">

            <form class="formulario" action="filtros/criar.php" method="post">
                <div class="corpoproduto">
                    <div class="imgproduto">
                        <img src="assets/img/produto-1.jpg" alt="Bolsa Sustentável" class="produtominiatura">
                    </div>
                    <div class="titulo">
                        <p>Bolsa Sustentável</p>
                        <h2>R$42,45</h2>
                        <input type="hidden" name="id_produto" value="">
                        <input type="hidden" name="valor" value="">
                        <button type="submit" class="button" name="addcarrinho">Adicionar ao Carrinho</button>
                    </div>
                </div>




                <div class="corpoproduto">
                    <div class="imgproduto">
                        <img src="assets/img/produto-2.jpg" alt="Bolsa Sustentável" class="produtominiatura">
                    </div>
                    <div class="titulo">
                        <p>Vela Dalit</p>
                        <h2>R$17,20</h2>
                        <input type="hidden" name="id_produto" value="">
                        <input type="hidden" name="valor" value="">
                        <button type="submit" class="button" name="addcarrinho">Adicionar ao Carrinho</button>
                    </div>

                </div>




                <div class="corpoproduto">
                    <div class="imgproduto">
                        <img src="assets/img/produto-3.jpg" alt="Bolsa Sustentável" class="produtominiatura">
                    </div>
                    <div class="titulo">
                        <p>Mini Estufa</p>
                        <h2>R$2.500</h2>
                        <input type="hidden" name="id_produto" value="">
                        <input type="hidden" name="valor" value="">
                        <button type="submit" class="button" name="addcarrinho">Adicionar ao Carrinho</button>
                    </div>


                </div>


        </div>
    </div>
</form>



<!--- PRODUTOS 2 --->

<div class="container">
    <div class="linha-produtos">
        <form class="formulario" action="filtros/criar.php" method="post">


            <div class="corpoproduto">
                <div class="imgproduto">
                    <img src="assets/img/produto-4.jpg" alt="Bolsa Sustentável" class="produtominiatura">
                </div>
                <div class="titulo">
                    <p>Lapís de Semente</p>
                    <h2>R$1,05</h2>
                    <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho">Adicionar ao Carrinho</button>
                </div>
            </div>
            <div class="corpoproduto">
                <div class="imgproduto">
                    <img src="assets/img/produto-5.jpg" alt="Bolsa Sustentável" class="produtominiatura">
                </div>
                <div class="titulo">
                    <p>Kit Auto Cuidado Naturalvegan</p>
                    <h2>R$50,00</h2>
                    <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho">Adicionar ao Carrinho</button>
                </div>
            </div>
            <div class="corpoproduto">
                <div class="imgproduto">
                    <img src="assets/img/produto-6.jpg" alt="Bolsa Sustentável" class="produtominiatura">
                </div>
                <div class="titulo">
                    <p>Kit Sabonete e Bucha Natural</p>
                    <h2>R$37,00</h2>
                    <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho">Adicionar ao Carrinho</button>
                </div>
            </div>
    </div>
>>>>>>> 420144dbb199f9731a6f41ba1bb57723fa6f8c63
</div>
</form>

<<<<<<< HEAD
<!-- PRODUTOS 3 -->
<div class="container">
    <div class="linha-produtos">
        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produtos7.webp" alt="Bolsa Ecológica" class="produtominiatura">
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
    <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45" class="btn-carrinho">
        <img src="assets/img/carrinho.png" alt="Carrinho" width="50px">
    </a>
</div>
</div>

        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produtos8.webp" alt="Bolsa Térmica" class="produtominiatura">
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
    <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45" class="btn-carrinho">
        <img src="assets/img/carrinho.png" alt="Carrinho" width="50px">
    </a>
</div>
</div>

        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produtos9.webp" alt="Bolsa de Juta" class="produtominiatura">
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
    <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45" class="btn-carrinho">
        <img src="assets/img/carrinho.png" alt="Carrinho" width="50px">
    </a>
</div>
    </div>
</div>

<!-- PRODUTOS 4 -->
<div class="container">
    <div class="linha-produtos">
        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produtos10.webp" alt="Bolsa de Algodão Cru" class="produtominiatura">
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
    <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45" class="btn-carrinho">
        <img src="assets/img/carrinho.png" alt="Carrinho" width="50px">
    </a>
</div>
</div>

        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produtos11.webp" alt="Bolsa de Papel Kraft" class="produtominiatura">
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
    <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45" class="btn-carrinho">
        <img src="assets/img/carrinho.png" alt="Carrinho" width="50px">
    </a>
</div>
</div>

        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produtos12.webp" alt="Bolsa Compacta Reutilizável" class="produtominiatura">
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
    <a href="?adicionar=true&produto_id=1&nome=Bolsa+Sustent%C3%A1vel&preco=42.45" class="btn-carrinho">
        <img src="assets/img/carrinho.png" alt="Carrinho" width="50px">
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
            <p>Somos uma empresa comprometida com a sustentabilidade e inovação. Nossa missão é trazer soluções ecológicas e eficientes para o futuro.</p>
        </div>

        <div class="footer-section">
            <h3>Links rápidos</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contato</a></li>
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
=======
<!--- PRODUTOS 3 --->
<div class="container">
    <div class="linha-produtos">
        <form class="formulario" action="filtros/criar.php" method="post">
            <div class="corpoproduto">
                <div class="imgproduto">
                    <img src="assets/img/produtos7.jpg" alt="Bolsa Sustentável" class="produtominiatura">
                </div>
                <div class="titulo">
                    <p>Mini Estufa Com Aquario</p>
                    <h2>R$1.500</h2>
                    <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho">Adicionar ao Carrinho</button>
                </div>
            </div>
            <div class="corpoproduto">
                <div class="imgproduto">
                    <img src="assets/img/produtos8.jpg" alt="Bolsa Sustentável" class="produtominiatura">
                </div>
                <div class="titulo">
                    <p>Kit De Perfume Desodorante e Colonia em Gel</p>
                    <h2>R$47,60</h2>
                    <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho">Adicionar ao Carrinho</button>
                </div>
            </div>
            <div class="corpoproduto">
                <div class="imgproduto">
                    <img src="assets/img/produtos9.jpg" alt="Bolsa Sustentável" class="produtominiatura">
                </div>
                <div class="titulo">
                    <p>Face Cloth</p>
                    <h2>R$19,70</h2>
                    <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho">Adicionar ao Carrinho</button>
                </div>
            </div>
    </div>
</div>
</form>
<!--- PRODUTOS 4 --->
<div class="container">
    <div class="linha-produtos">
        <form class="formulario" action="filtros/criar.php" method="post">
            <div class="corpoproduto">
                <div class="imgproduto">
                    <img src="assets/img/produtos10.jpg" alt="Bolsa Sustentável" class="produtominiatura">
                </div>
                <div class="titulo">
                    <p>Buchas de Plantas com Forma</p>
                    <h2>R$32,45</h2>
                    <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho">Adicionar ao Carrinho</button>
                </div>
            </div>
            <div class="corpoproduto">
                <div class="imgproduto">
                    <img src="assets/img/produtos11.jpg" alt="Bolsa Sustentável" class="produtominiatura">
                </div>
                <div class="titulo">
                    <p>Pacote de Absorvente Reutilizavel</p>
                    <h2>R$18,40</h2>
                    <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho">Adicionar ao Carrinho</button>
                </div>
            </div>
            <div class="corpoproduto">
                <div class="imgproduto">
                    <img src="assets/img/produtos12.jpg" alt="Bolsa Sustentável" class="produtominiatura">
                </div>
                <div class="titulo">
                    <p>Maquiagem (blush, batom e sombra)</p>
                    <h2>R$34,50</h2>
                    <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho">Adicionar ao Carrinho</button>
                </div>
            </div>
    </div>
</div>
</form>
>>>>>>> 420144dbb199f9731a6f41ba1bb57723fa6f8c63

<!--- FIM DOS PRODUTOS --->


</body>

</html>
<?php
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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
</div>

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
</div>
</form>

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

<!--- FIM DOS PRODUTOS --->


</body>

</html>
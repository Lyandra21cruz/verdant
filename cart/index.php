 <?php
//  if ($_SESSION['logado']) {
    
//  } else {
//     header('location: ../');
//  }
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
<body>
    <!--- TOPO --->
<section class="section home" id="home">
    <div class="header">
    <div class="cart"><i class="fa fa-shopping-cart"></i>
        <p>0</p>
    </div>
</div>

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
        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produto-1.jpg" alt="Bolsa Sustentável" class="produtominiatura">
            </div>
            <div class="titulo">
                <p>Bolsa Sustentável</p>
                <h2>R$42,45</h2>
            </div>
        </div>
        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produto-2.jpg" alt="Bolsa Sustentável" class="produtominiatura">
            </div>
            <div class="titulo">
                <p>Vela Dalit</p>
                <h2>R$17,20</h2>
            </div>
        </div>
        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produto-3.jpg" alt="Bolsa Sustentável" class="produtominiatura">
            </div>
            <div class="titulo">
                <p>Mini Estufa</p>
                <h2>R$2.500</h2>
            </div>
        </div>
    </div>
</div>

  <!--- PRODUTOS 2 --->
<div class="container">
    <div class="linha-produtos">
        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produto-4.jpg" alt="Bolsa Sustentável" class="produtominiatura">
            </div>
            <div class="titulo">
                <p>Lapís de Semente</p>
                <h2>R$1,05</h2>
            </div>
        </div>
        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produto-5.jpg" alt="Bolsa Sustentável" class="produtominiatura">
            </div>
            <div class="titulo">
                <p>Kit Auto Cuidado Naturalvegan</p>
                <h2>R$50,00</h2>
            </div>
        </div>
        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produto-6.jpg" alt="Bolsa Sustentável" class="produtominiatura">
            </div>
            <div class="titulo">
                <p>Kit Sabonete e Bucha Natural</p>
                <h2>R$37,00</h2>
            </div>
        </div>
    </div>
</div>

  <!--- PRODUTOS 3 --->
<div class="container">
    <div class="linha-produtos">
        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produtos7.webp" alt="Bolsa Sustentável" class="produtominiatura">
            </div>
            <div class="titulo">
                <p>Bolsa Sustentável</p>
                <h2>R$32,45</h2>
            </div>
        </div>
        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produtos8.webp" alt="Bolsa Sustentável" class="produtominiatura">
            </div>
            <div class="titulo">
                <p>Bolsa Sustentável</p>
                <h2>R$32,45</h2>
            </div>
        </div>
        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produtos9.webp" alt="Bolsa Sustentável" class="produtominiatura">
            </div>
            <div class="titulo">
                <p>Bolsa Sustentável</p>
                <h2>R$32,45</h2>
            </div>
        </div>
    </div>
</div>

  <!--- PRODUTOS 4 --->
<div class="container">
    <div class="linha-produtos">
        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produtos10.webp" alt="Bolsa Sustentável" class="produtominiatura">
            </div>
            <div class="titulo">
                <p>Bolsa Sustentável</p>
                <h2>R$32,45</h2>
            </div>
        </div>
        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produtos11.webp" alt="Bolsa Sustentável" class="produtominiatura">
            </div>
            <div class="titulo">
                <p>Bolsa Sustentável</p>
                <h2>R$32,45</h2>
            </div>
        </div>
        <div class="corpoproduto">
            <div class="imgproduto">
                <img src="assets/img/produtos12.webp" alt="Bolsa Sustentável" class="produtominiatura">
            </div>
            <div class="titulo">
                <p>Bolsa Sustentável</p>
                <h2>R$32,45</h2>
            </div>
        </div>
    </div>
</div>


<!--- FIM DOS PRODUTOS --->

</body>
</html>
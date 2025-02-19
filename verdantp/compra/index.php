<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Compra Verdant</title>
</head>

<body>

<header class="header">
    <div class="logo-container">
      <a href="../../index.php">   <img src="../../public/css/img/download.png" alt="Verdant Logo" class="logo"></a>
    </div>
    <h1 class="brand-name">VERDANT</h1>
    <div class="menu-icon" onclick="toggleMenu()">
        <div></div>        <div></div><a href="carrinho.php"><img src="../../public/css/img/carrinho.png" alt="" width= "90px"></a>

        <div></div>
        <div></div>
    </div>
</header>

<div class="menu">
        <a href="../../cart/index.php">INÍCIO</a>
        <a href="../../sobre.php">EMPRESA</a>
        <a href="verdantp/compra/index.php">VENDA</a>
        <a href="feedback.php">FEEDBACKS</a>
    
    </div>
    <div class="linha-verde"></div>
<br>


    <div class="container"><main>            <h1>Dados do Comprador</h1>

        <section class="checkout">
            <form class="checkout-form">
                <div class="form-group">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>

                <div class="form-group">
                    <label for="pin">PIN do Produto:</label>
                    <input type="text" id="pin" name="pin" required>
                </div>

                <div class="form-group">
                    <label for="cep">CEP:</label>
                    <input type="text" id="cep" name="cep" required>
                </div>

                <div class="form-group">
                    <label for="pagamento">Forma de Pagamento:</label>
                    <select id="pagamento" name="pagamento" required>
                        <option value="cartao">Cartão de Crédito</option>
                        <option value="boleto">Boleto Bancário</option>
                        <option value="pix">Pix</option>
                    </select>
                </div>

                <div class="payment-info">
                    <p><strong>Informações de pagamento:</strong></p>
                    <ul>
                        <li><strong>Cartão de Crédito:</strong> Visa, Mastercard, American Express</li>
                        <li><strong>Boleto Bancário:</strong> Pagamento disponível por 3 dias úteis</li>
                        <li><strong>Pix:</strong> Pagamento instantâneo e sem taxas adicionais</li>
                    </ul>
                </div>

                <button type="submit" class="btn-comprar">Finalizar Compra</button>
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
                <li><strong>Retirada em Loja:</strong> Grátis</li>
            </ul>
        </div>

        <div class="privacy-policy">
            <h3>Política de Privacidade</h3>
            <p>Valorizamos sua privacidade. Seus dados serão utilizados exclusivamente para o processamento da compra e não serão compartilhados com terceiros, exceto conforme exigido por lei.</p>
        </div>

        <div class="security">
            <h3>Segurança</h3>
            <p>Nosso site utiliza tecnologia de ponta para garantir a segurança das suas transações online. Dados sensíveis são criptografados para garantir a sua proteção.</p>
        </div>
    </section>
</main>

<br><br>

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

<script>
    function toggleMenu() {
        document.querySelector('.menu').classList.toggle('active');
        document.querySelector('.menu-icon').classList.toggle('active');
    }
</script>

</body>
</html>

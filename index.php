<?php

session_start();

if (isset($_SESSION["logado"])) {
    header("Location: sobre.php");
}

require_once("app/controllers/UsuarioController.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    ?> 
    <!-- <script>
        alert('teste');
    </script> -->
    <?php
    $controller = new UsuarioController();
    $controller->entrarUsuario($_POST['email'], $_POST['senha']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>VERDANT</title>
</head>

<body class="index">

    <div class="overlay"></div>
    <div class="cabecalho">
        <h1 class="titulo">Verdant</h1>
        <h2 class="subtitulo">SUSTENTABILIDADE</h2>
        <h3 class="descricao">CUIDAR DO QUE É VERDE É CUIDAR DA VIDA<br>EM SUA FORMA MAIS PURA</h3>
    </div>
    <br><br>
    <div class="cadastro">
        <h1>LOGIN</h1>
        <div class="form-container">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <input type="email" name="email" placeholder="Email" required>
                <br>
                <input type="password" name="senha" placeholder="Senha" required>
                <button type="submit">ENTRAR</button>
                <br>
                <div class="back-to-login"><b><a href="cadastro.php">Não tem uma conta? Clique aqui para cadastrar</a></b></div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>
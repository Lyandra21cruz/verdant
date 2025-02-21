<?php

session_start();

if (isset($_SESSION["logado"])) {
    header("Location: sobre.php");
}

require_once("app/controllers/UsuarioController.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    ?> 
    <?php
    $controller = new UsuarioController();
    $controller->criarUsuario($_POST['nome_usuario'], $_POST['email'], $_POST['senha'], 0, 0);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastro - VERDANT</title>
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
        <h1>CADASTRAR</h1>
        <div class="form-container">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <input type="text" name="nome_usuario" placeholder="Nome" required>
                <br>
                <input type="email" name="email" placeholder="Email" required>
                <br>
                <input type="password" name="senha" placeholder="Senha" required>
                <br>
                <button type="submit">CADASTRAR</button>
                <br>
                <div class="back-to-login"><b><a href="index.php">Já tem uma conta? Clique aqui para entrar</a></b>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>
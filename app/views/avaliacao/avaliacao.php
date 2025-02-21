<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="avaliacao.php" method="POST">

        <input type="text" name="feed" placeholder="Feedback">

        <input type="number" name="nota" placeholder="Nota para o Produto">
 

    </form>
    
</body>
</html>




<?php
require_once "C:/Turma2/xampp/htdocs/verdant/config/config.php";
require_once "C:/Turma2/xampp/htdocs/verdant/app/controllers/AvaliacaoController.php";

if (isset($_POST["nome_produto"]) && isset($_POST["preco"]) && isset($_POST["descricao"])){

    $mercadoController=new AvaliacaoController($pdo);
    $mercadoController-> criarAvaliacao($_POST["feedback"],  $_POST["nota"]);

    
}





?>
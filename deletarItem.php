<?php

session_start();

require_once __DIR__.'\app\controllers\CarrinhoController.php';

$carrinho = new CarrinhoController();
$carrinho->deletarItemCarrinho($_SESSION['id_usuario'], $_GET['id_produto']);

header('location: carrinho.php');
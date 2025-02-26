<?php

session_start();

$id_usuario = $_SESSION["id_usuario"]["id_usuario"];




$files = $_FILES['imagem_produto'];
$names = $files['name'];
$tmp_names = $files['tmp_name'];

foreach ($names as $index => $name) {
    $extension = pathinfo($name, PATHINFO_EXTENSION);
    $newName = uniqid() .'.'. $extension;
    move_uploaded_file($tmp_names[$index], '../../../public/img/produtos/'.$newName);
}

require_once('../../controllers/ProdutoController.php');

$produtos = new ProdutoController();
$produtos->criarProduto($id_usuario, $_POST['nome_produto'], $_POST['descricao_produto'], $newName, $_POST['preco_produto'], $_POST['estoque_produto'] );
header('location: ../../../');
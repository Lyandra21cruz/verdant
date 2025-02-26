<?php

require_once('config\config.php');

class ProdutoModel {

    public $pdo;

    public function criarProduto($nome_usuario, $email, $senha, $vendedor, $admin)
    {
        $stmt = $this->pdo->prepare("INSERT INTO produtos (nome_usuario, email, senha, vendedor, admin) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$nome_usuario, $email, $senha, $vendedor, 0]);
    }

    public function editarProduto($id)
    {

    }

    public function deletarProduto($id)
    {

    }

    public function listarProdutos() {
        $stmt = $this->pdo->prepare("SELECT * FROM produtos");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}

?>
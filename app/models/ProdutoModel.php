<?php

require_once('C:\Turma2\xampp\htdocs\verdant\config\config.php');

class ProdutoModel {

    public $pdo;

    public function __construct()
    {
        $database = new Config();
        $this->pdo = $database->getConnection();
    }

    public function criarProduto($id_usuario, $nome_produto, $descricao_produto, $imagem_produto, $preco_produto, $estoque_produto)
    {
        $stmt = $this->pdo->prepare("INSERT INTO produtos (id_usuario, nome_produto, descricao_produto, imagem_produto, preco_produto, estoque_produto) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$id_usuario, $nome_produto, $descricao_produto, $imagem_produto, $preco_produto, $estoque_produto]);
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
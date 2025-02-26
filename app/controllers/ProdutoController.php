<?php

require_once __DIR__.'/../models/ProdutoModel.php';

class ProdutoController {
    public $produtoModel;

    public function __construct()
    {
        $this->produtoModel = new ProdutoModel();
    }

    public function criarProduto($id_usuario, $nome_produto, $descricao_produto, $imagem_produto, $preco_produto, $estoque_produto)
    {
        $this->produtoModel->criarProduto($id_usuario, $nome_produto, $descricao_produto, $imagem_produto, $preco_produto, $estoque_produto);
    }

    public function editarProduto($id)
    {
        $this->produtoModel->editarProduto($id);
    }

    public function deletarProduto($id)
    {
        $this->produtoModel->deletarProduto($id);
    }

    public function listarProdutos() {
        return $this->produtoModel->listarProdutos();
    }
};

?>
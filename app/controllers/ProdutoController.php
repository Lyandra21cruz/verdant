<?php

require_once __DIR__.'/../models/ProdutoModel.php';

class ProdutoController {
    public $produtoModel;

    public function __construct()
    {
        $this->produtoModel = new ProdutoModel();
    }

    public function criarProduto($nome_usuario, $email, $senha, $vendedor, $admin)
    {
        $this->produtoModel->criarProduto($nome_usuario, $email, $senha, $vendedor, $admin);
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
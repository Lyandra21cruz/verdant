<?php

require_once __DIR__.'/../models/CarrinhoModel.php';

class CarrinhoController
{

    public $carrinhomodel;
    public function __construct()
    {
        $this->carrinhomodel = new CarrinhoModel();
    }

    public function adicionarItemCarrinho($id_usuario, $id_produto, $qtd_produto)
    {
        $this->carrinhomodel->adicionarItemCarrinho($id_usuario, $id_produto, $qtd_produto);
    }

    public function editarCarrinho($id)
    {
        $this->carrinhomodel->editarCarrinho($id);
    }

    public function deletarItemCarrinho($id_usuario, $id_produto)
    {
        $this->carrinhomodel->deletarItemCarrinho($id_usuario, $id_produto);
    }

}

?>
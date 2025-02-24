<?php

require_once __DIR__.'/../models/CarrinhoModel.php';

class CarrinhoController
{

    public $carrinhomodel;
    public function __construct()
    {
        $this->carrinhomodel = new CarrinhoModel();
    }

    public function adicionarCarrinho($id_usuario, $id_produto, $qtd_produto)
    {
        $this->carrinhomodel->adicionarCarrinho($id_usuario, $id_produto, $qtd_produto);
    }

    public function editarCarrinho($id)
    {
        $this->carrinhomodel->editarCarrinho($id);
    }

    public function deletarCarrinho($id)
    {
        $this->carrinhomodel->deletarCarrinho($id);
    }

    public function entrarCarrinho($email, $senha)
    {
        $this->carrinhomodel->entrarCarrinho($email, $senha);
    }
    
    public function permissaoCarrinho($id)
    {
        return $this->carrinhomodel->permissaoCarrinho($id);
    }


}

?>
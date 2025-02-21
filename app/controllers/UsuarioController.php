<?php

require_once __DIR__.'/../models/UsuarioModel.php';

class UsuarioController
{

    public $usuarioModel;
    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }

    public function criarUsuario($nome_usuario, $email, $senha, $vendedor, $admin)
    {
        $this->usuarioModel->criarUsuario($nome_usuario, $email, $senha, $vendedor, $admin);
    }

    public function editarUsuario($id)
    {
        $this->usuarioModel->editarUsuario($id);
    }

    public function deletarUsuario($id)
    {
        $this->usuarioModel->deletarUsuario($id);
    }

    public function entrarUsuario($email, $senha)
    {
        $this->usuarioModel->entrarUsuario($email, $senha);
    }


}

?>
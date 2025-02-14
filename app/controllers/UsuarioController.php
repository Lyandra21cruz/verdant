<?php 
require_once "C:\Turma2\xampp\htdocs\verdant\app\models\UsuarioModel.php";

class UsuarioController {

    public $usuarioModel;
    public function __construct() {
        $this->usuarioModel = new UsuarioModel();
    }

    public function criarUsuario()
    {
        $this->usuarioModel->criarUsuario();
    }
    
    public function editarUsuario($id){
        $this->usuarioModel->editarUsuario($id);
    }

    public function deletarUsuario($id){
        $this->usuarioModel->deletarUsuario($id);
    }


}

?>
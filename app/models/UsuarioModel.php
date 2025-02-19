<?php
require_once('C:\Turma2\xampp\htdocs\verdant\config\config.php');

class UsuarioModel
{
    public $pdo;

    public function __construct()
    {
        $database = new Config();
        $this->pdo = $database->getConnection();
    }

    public function criarUsuario($nome_usuario, $email, $vendedor, $admin)
    {
        $stmt = $this->pdo->prepare("INSERT INTO usuarios (nome_usuario, email, vendedor, admin) VALUES (?)");
        $stmt->execute([$nome_usuario, $email, $vendedor, $admin]);
    }

    public function editarUsuario($id)
    {
        $stmt = $this->pdo->prepare("UPDATE usuarios SET  WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function deletarUsuario($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function entrarUsuario($email, $senha)
    {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
            $stmt->execute([$email, $senha]);
            $_SESSION['logado'] = true;
            header("location: sobre.php");
        } catch (\Throwable $e) {
            return $e->getMessage();
        }
    }


}

?>
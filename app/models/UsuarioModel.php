<?php
require_once('config\config.php');

class UsuarioModel
{
    public $pdo;

    public function __construct()
    {
        $database = new Config();
        $this->pdo = $database->getConnection();
    }

    public function criarUsuario($nome_usuario, $email, $senha, $vendedor, $admin)
    {
        $stmt = $this->pdo->prepare("INSERT INTO usuarios (nome_usuario, email, senha, vendedor, admin) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$nome_usuario, $email, $senha, $vendedor, 0]);
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
            echo "<script> alert('deu erro'); </script>";
        }
    }

    public function buscarId($email, $senha)
    {
        try {
            $stmt = $this->pdo->prepare("SELECT id FROM usuarios WHERE email = ? AND senha = ?");
            $stmt->execute([$email, $senha]);
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        } catch (\Throwable $e) {
            return $e->getMessage();
        }
    }

    public function permissaoUsuario($id)
    {
        $stmt = $this->pdo->prepare("SELECT vendedor, admin FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
        $usuario = $stmt->fetch();
        return $usuario;
    }


}

?>
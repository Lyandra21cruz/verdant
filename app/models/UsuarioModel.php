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

    public function tornarVendedor($id)
    {
        $stmt = $this->pdo->prepare("UPDATE usuarios SET vendedor = ? WHERE id_usuario = ?");
        $stmt->execute([1, $id]);
    }

    public function deletarUsuario($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function entrarUsuario($email, $senha)
    {
        try {
            $usuarioExiste = $this->usuarioExiste($email);

            if ($usuarioExiste) {
                $verificaSenha = $this->VerificaSenha($email, $senha);
                if ($verificaSenha) {
                    $_SESSION['logado'] = true;
                    $id_usuario = $this->buscarId($email, $senha);
                    $_SESSION['id_usuario'] = $id_usuario['id_usuario'];

                    $permissoes = $this->permissaoUsuario($_SESSION['id_usuario']);

                    $_SESSION['permissoes'] = $permissoes;

                    header("location: index.php");
                    exit;
                } else {
                    $erros[] = '<li class="login-error"> Usuário e senha não conferem. </li>';
                }
            } else {
                $erros[] = '<li class="login-error"> Usuário inexistente </li>';
            }
        } catch (PDOException $e) {
            $erros[] = '<li class="login-error">Erro ao conectar ao banco de dados</li>';
        }
    }

    public function usuarioExiste($email)
    {
        // Verifica se o usuário existe
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email);
        return $stmt->execute();
    }

    public function verificaSenha($email, $senha)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC) !== false;
    }

    public function buscarId($email, $senha)
    {
        try {
            $stmt = $this->pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = ? AND senha = ?");
            $stmt->execute([$email, $senha]);
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        } catch (\Throwable $e) {
            die;
        }
    }

    public function permissaoUsuario($id)
    {
        $stmt = $this->pdo->prepare("SELECT vendedor, admin FROM usuarios WHERE id_usuario = ?");
        $stmt->execute([$id]);

        return $stmt->fetch();
        ;
    }


}

?>
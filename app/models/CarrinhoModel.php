<?php
require_once('config\config.php');

class CarrinhoModel
{
    public $pdo;

    public function __construct()
    {
        $database = new Config();
        $this->pdo = $database->getConnection();
    }

    public function adicionarCarrinho($id_usuario, $id_produto, $qtd_produto)
    {
        $stmt = $this->pdo->prepare("INSERT INTO Carrinhos (id_usuario, id_produto, quantidade) VALUES (?, ?, ?)");
        $stmt->execute([$id_usuario, $id_produto, $qtd_produto]);
    }

    public function editarCarrinho($id)
    {
        $stmt = $this->pdo->prepare("UPDATE Carrinhos SET  WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function deletarCarrinho($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM Carrinhos WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function entrarCarrinho($email, $senha)
    {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM Carrinhos WHERE email = ? AND senha = ?");
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
            $stmt = $this->pdo->prepare("SELECT id FROM Carrinhos WHERE email = ? AND senha = ?");
            $stmt->execute([$email, $senha]);
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        } catch (\Throwable $e) {
            return $e->getMessage();
        }
    }

    public function permissaoCarrinho($id)
    {
        $stmt = $this->pdo->prepare("SELECT vendedor, admin FROM Carrinhos WHERE id = ?");
        $stmt->execute([$id]);
        $Carrinho = $stmt->fetch();
        return $Carrinho;
    }


}

?>
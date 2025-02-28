<?php
require_once('C:\Turma2\xampp\htdocs\verdant\config\config.php');

class CarrinhoModel
{
    public $pdo;

    public function __construct()
    {
        $database = new Config();
        $this->pdo = $database->getConnection();
    }

    public function adicionarItemCarrinho($id_usuario, $id_produto, $qtd_produto)
    {
        $stmt = $this->pdo->prepare("INSERT INTO carrinhos (id_usuario, id_produto, quantidade) VALUES (?, ?, ?)");
        $stmt->execute([$id_usuario, $id_produto, $qtd_produto]);
    }

    public function editarCarrinho($id)
    {
        $stmt = $this->pdo->prepare("UPDATE carrinhos SET  WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function deletarItemCarrinho($id_usuario, $id_produto)
    {
        $stmt = $this->pdo->prepare("DELETE FROM carrinhos WHERE id_usuario = ? AND id_produto = ?");
        $stmt->execute([$id_usuario, $id_produto]);
    }

    public function buscarItens($id_usuario)
    {
        $stmt = $this->pdo->prepare("SELECT id_produto, quantidade FROM carrinhos WHERE id_usuario = ?");
        $stmt->execute([$id_usuario]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarTotal($id_usuario)
    {
        $stmt = $this->pdo->prepare("SELECT COUNT(*) AS total FROM carrinhos WHERE id_usuario = :id_usuario");
        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'] ?? 0;
    }

}

?>
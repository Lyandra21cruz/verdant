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
        $stmt = $this->pdo->prepare("DELETE * FROM carrinhos WHERE id_usuario = ?, id_produto = ?");
        $stmt->execute([$id_usuario, $id_produto]);
    }


}

?>
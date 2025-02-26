<?php
require_once 'C:/Turma2/xampp/htdocs/verdant/config/config.php';
class AvaliacaoModel
{
    public $pdo;

    public function __construct()
    {
        $database = new Config();
        $this->pdo = $database->getConnection();
    }

    public function criarAvaliacao($nome_cliente, $nome_produto, $feedback, $nota)
    {
        $stmt = $this->pdo->prepare("INSERT INTO avaliacoes (nome_cliente, nome_produto, feedback, nota) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nome_cliente, $nome_produto, $feedback, $nota]);
    }

    public function listarAvaliacoes()
    {
        $sql = "SELECT * FROM avaliacoes";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

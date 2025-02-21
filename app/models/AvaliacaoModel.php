<?php
require_once('config\config.php');

class AvaliacaoModel
{
    public $pdo;

    public function __construct()
    {
        $database = new Config();
        $this->pdo = $database->getConnection();
    }

    public function criarAvaliacao($feedback,$nota)
    {
        $stmt = $this->pdo->prepare("INSERT INTO avaliacoes (feedback,nota) VALUES (?, ?)");
        $stmt->execute([$feedback,$nota]);
    }

}

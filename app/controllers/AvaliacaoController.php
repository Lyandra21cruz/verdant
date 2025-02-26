<?php

require_once 'C:/Turma2/xampp/htdocs/verdant/app/models/AvaliacaoModel.php';

class AvaliacaoController {
    private $avaliacaoModel;

    public function __construct() {
        $this->avaliacaoModel = new AvaliacaoModel();
    }
    public function criarAvaliacao($nome_cliente, $nome_produto, $feedback, $nota) {
        $this->avaliacaoModel->criarAvaliacao($nome_cliente, $nome_produto, $feedback, $nota);
    }   
    public function listarAvaliacoes() {
        return $this->avaliacaoModel->listarAvaliacoes();
    }
}

?>

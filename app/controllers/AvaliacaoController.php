<?php

require_once __DIR__.'/../models/AvaliacaoModel.php';

class AvaliacaoController
{

    public $avaliacaoModel;
    public function __construct()
    {
        $this->avaliacaoModel = new UsuarioModel();
    }

    public function criarAvaliacao($feedback, $nota)
    {
        $this->avaliacaoModel->criarAvaliacao($feedback,$nota);
    }

}


/* `id_avaliacao` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `feedback` text NOT NULL,
  `nota` tinyint(5) NOT NULL,
  `id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
*/
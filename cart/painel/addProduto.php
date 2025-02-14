<?php

ob_start();
require('../sheep_core/config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Maykon Silveira</title>
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Main Content -->
<div class="container" style="padding: 20px; margin-top: 120px;">
    <div class="col-md-10">
        <section class="section">

            <!-- Início topo menu -->
            <?php require_once('topo.php'); ?>
            <!-- Fim topo menu -->

            <br>
            <!-- Início formulário -->
            <form action="filtros/criar.php" method="post" enctype="multipart/form-data">

                <div class="section-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">

                                <div class="card-header">
                                    <h4>Produtos</h4>
                                </div>
                                <div class="card-body">

                                    <div class="form-group row mb-4">
                                        <div class="col-md-12">
                                            <input type="file" class="form-control" name="capa" placeholder="Escolha uma imagem">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="nome" placeholder="Título do Produto">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="valor" placeholder="Valor">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <div class="col-md-12">
                                            <button type="submit" class="button" style="width: 100%;" name="criarProduto">Salvar</button>
                                        </div>
                                    </div>
                                    <p><a href="">VERDANT</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Fim formulário -->
        </section>
    </div>
</div>

<script src="assets/js/custom.js"></script>

</body>
</html>

<?php
ob_end_flush();
?>

<?php

session_start();

require_once 'C:\Turma2\xampp\htdocs\verdant\app\controllers\UsuarioController.php';

$usuario = new UsuarioController();
$usuario->tornarVendedor($_SESSION['id_usuario']);

header('location: logout.php');

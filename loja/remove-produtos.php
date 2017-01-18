<?php
require_once  'conecta.php';
require_once 'banco-produto.php';
require_once 'logica-usuario.php';

$id = $_POST['id'];
removeProduto($conexao, $id);

$_SESSION['success'] = "Produto Removido com Sucesso";
header("Location: produto-lista.php");
die();

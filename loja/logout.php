<?php require_once 'logica-usuario.php';
require_once 'logica-usuario.php';

$_SESSION['success'] = "Deslogado com Sucesso";

logout();
header("Location: index.php");

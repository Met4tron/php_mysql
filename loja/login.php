<?php
require_once 'logica-usuario.php';
require_once 'banco-usuarios.php';

$usuario = buscaUsuario($conexao, $_POST['email'], $_POST['senha']);
if ($usuario == null) {
    $_SESSION['danger'] = "Usuario ou senha invalidas";
    header("Location: index.php");
} else {
    $_SESSION['success'] = "Usuário Logado com Sucesso";
    header("Location: index.php");
    logaUsuario($usuario["email"]);
}

die();

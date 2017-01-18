<?php
require_once 'conecta.php';

function buscaUsuario($conexao, $email, $senha){
    $senhaCripto = md5($senha);
    $email = mysqli_real_escape_string($conexao, $email);
    $query = "select * from usuarios where email='{$email}' and senha='{$senhaCripto}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);

    return $usuario;
}

 ?>

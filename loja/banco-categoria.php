<?php
require 'conecta.php';
function listaCategorias($conexao) {
    $categorias = [];
    $query = "select * from categorias";
    $resultado = mysqli_query($conexao, $query);
    while($categoria = mysqli_fetch_assoc($resultado)) {
        array_push($categorias, $categoria);
    }

    return $categorias;

}
?>

<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once 'mostra-alerta.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Minha Loja</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/loja.css">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">Minha Loja</a>
                </div>
                <div class="nav navbar-nav">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="formulario-produto.php">Adicionar Produto</a></li>
                        <li><a href="contato.php">Contato</a></li>
                        <li><a href="produto-lista.php">Produtos</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">

          <div class="principal">
              <?php mostraAlerta("success") ?>
              <?php mostraAlerta("danger") ?>

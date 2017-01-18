<?php
require_once 'cabecalho.php';
require_once 'banco-categoria.php';
require_once 'logica-usuario.php';

verificaUsuario();
$produto = ["nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1"];
$usado = "";
$categorias = listaCategorias($conexao);
  ?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <title>Formulario de Produtos</title>
  </head>
  <body>
    <h1>Cadastro de Produtos</h1>
    <form class="" action="adiciona-produto.php" method="POST" >
        <?php include 'formulario-base.php'; ?>
            <tr>
                <td>
                    <button class="btn btn-primary" type="submit" value="Cadastrar">Enviar</button>
                </td>
            </tr>
        </table>
    </form>
  </body>
</html>
<?php include 'rodape.php'; ?>

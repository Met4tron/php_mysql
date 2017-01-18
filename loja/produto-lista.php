<?php require_once 'cabecalho.php';
 require_once 'conecta.php';
 require_once 'banco-produto.php' ?>
 <?php
 $produtos = listaProdutos($conexao);
 ?>

 <table class="table table-striped table-bordered">
     <tr>
         <td>Id</td>
         <td>Nome</td>
         <td>Preço</td>
         <td>Descricao</td>
         <td>Categoria Nome</td>
         <td>Ações</td>
     </tr>
 <?php
 foreach($produtos as $produto) :
 ?>

     <tr>
         <td><?=$produto['id']?></td>
         <td><?=$produto['nome']?></td>
         <td>R$<?=$produto['preco']?></td>
         <td><?=substr($produto['descricao'], 0, 40)?></td>
         <td><?=$produto['categoria_nome']?></td>
         <td>
            <a href="editar-produtos.php?id=<?=$produto['id']?>" class="btn btn-success btn-block" style="margin-bottom: 5px;">Editar</a>
            <form class="" action="remove-produtos.php" method="POST">
                <input type="hidden" name="id" value="<?=$produto['id']?>"/>
                <button  class="btn btn-danger btn-block">Remover</button>
            </form>
         </td>

     </tr>

 <?php
 endforeach
 ?>
 </table>

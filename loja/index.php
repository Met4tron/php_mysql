<?php require_once 'cabecalho.php'; ?>
<?php require_once 'logica-usuario.php'; ?>
    <h1 class="jumbotron">Bem Vindo !</h1>

<?php
if(usuarioEstaLogado()) {
?>
    <p class="text-success">Você está logado como <?=usuarioLogado()?></p>
    <a href="logout.php" class="btn btn-danger">Deslogar</a>
<?php } else { ?>
    <form class="form-horizontal center" action="login.php" method="post">
        <div class="form-group">
            <label for="email" class="control-label col-sm-2">Email: </label>
            <div class="col-sm-5">
                <input type="email" name="email" value="" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="senha" class="control-label col-sm-2">Senha: </label>
            <div class="col-sm-5">
                <input type="password" name="senha" value="" class="form-control" placeholder="Senha">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Logar</button>
    </form>
<?php } ?>

<?php include 'rodape.php'; ?>

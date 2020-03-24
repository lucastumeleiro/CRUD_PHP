<?php
include_once 'php_action/conecta.php';
include_once 'includes/header.php';

if (isset($_GET['cod'])) :
        $cod = mysqli_escape_string($connect, $_GET['cod']);
        $sql = "SELECT * FROM cliente WHERE cod = '$cod'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
        <form action="php_action/update.php" method="POST">

                <input type="hidden" name="cod" value="<?php echo $dados['cod']; ?>">

                <div class="input-field s12">
                        <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
                        <label for="nome">Nome</label>
                </div>

                <div class="input-field s12">
                        <input type="text" name="endereco" id="endereco" value="<?php echo $dados['endereco']; ?>">
                        <label for="endereco">Endereço</label>
                </div>

                <div class="input-field s12">
                        <input type="text" name="numero" id="numero" value="<?php echo $dados['numero']; ?>">
                        <label for="numero">Numero</label>
                </div>

                <div class="input-field s12">
                        <input type="text" name="bairro" id="bairro" value="<?php echo $dados['bairro']; ?>">
                        <label for="bairro">Bairro</label>
                </div>

                <div class="input-field s12">
                        <input type="text" name="telefone" id="telefone" value="<?php echo $dados['fone']; ?>">
                        <label for="telefone">Telefone</label>
                </div>


                <div class="input-field s12">
                        <input type="text" name="cidade" id="cidade" value="<?php echo $dados['cidade']; ?>">
                        <label for="cidade">Cidade</label>
                </div>

                <div class="input-field s12">
                        <input type="text" name="email" id="email" value="<?php echo $dados['email']; ?>">
                        <label for="email">Email</label>
                </div>
                <div class="input-field s12">
                        <input type="password" name="senha" id="senha" value="<?php echo $dados['senha']; ?>">
                        <label for="senha">Senha</label>
                </div>

                <button type="submit" name="btn-editar" class="btn"> Atualizar</button>
                <a href="index.php" class="btn orange"> Listar Clientes </a>

        </form>
</div>
<?php
include_once 'includes/footer.php';
?>
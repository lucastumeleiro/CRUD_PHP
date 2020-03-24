<?php
include_once 'includes/header.php';
?>

<div class="row">
        <form action="php_action/create.php" method="POST">
                <div class="input-field s12">
                        <input type="text" name="nome" id="nome">
                        <label for="nome">Nome</label>
                </div>

                <div class="input-field s12">
                        <input type="text" name="endereco" id="endereco">
                        <label for="endereco">Endereço</label>
                </div>

                <div class="input-field s12">
                        <input type="text" name="numero" id="numero">
                        <label for="numero">Numero</label>
                </div>

                <div class="input-field s12">
                        <input type="text" name="bairro" id="bairro">
                        <label for="bairro">Bairro</label>
                </div>

                <div class="input-field s12">
                        <input type="text" name="telefone" id="telefone">
                        <label for="telefone">Telefone</label>
                </div>


                <div class="input-field s12">
                        <input type="text" name="cidade" id="cidade">
                        <label for="cidade">Cidade</label>
                </div>

                <div class="input-field s12">
                        <input type="text" name="email" id="email">
                        <label for="email">Email</label>
                </div>

                <div class="input-field s12">
                        <input type="password" name="senha" id="senha">
                        <label for="senha">Senha</label>
                </div>

                <button type="submit" name="btn-cadastrar" class="btn"> Cadastrar</button>
                <a href="index.php" class="btn orange"> Listar Clientes </a>

        </form>
</div>
<?php
include_once 'includes/footer.php';
?>
<?php
include_once 'php_action/conecta.php';
include_once 'includes/header.php';
include_once 'includes/mensagem.php'
?>



<div class="row">
    <div class="col s12 m10 push-m1">
        <table class="striped">
            <thead>
                <tr>
                    <th>Código:</th>
                    <th>Nome:</th>
                    <th>Endereço:</th>
                    <th>Número:</th>
                    <th>Bairro:</th>
                    <th>Fone:</th>
                    <th>Cidade:</th>
                    <th>Email:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM cliente";
                $resultado = mysqli_query($connect, $sql);

                if (mysqli_num_rows($resultado) > 0) :
                    while ($dados = mysqli_fetch_array($resultado)) :
                ?>

                <tr>
                    <td><?php echo $dados['cod']; ?></td>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['endereco']; ?></td>
                    <td><?php echo $dados['numero']; ?></td>
                    <td><?php echo $dados['bairro']; ?></td>
                    <td><?php echo $dados['fone']; ?></td>
                    <td><?php echo $dados['cidade']; ?></td>
                    <td><?php echo $dados['email']; ?></td>


                    <td><a href="editar.php?cod=<?php echo $dados['cod']; ?>" class="btn-floating blue"><i class="material-icons">edit</i></a></td>
                    <td><a href="#modal<?php echo $dados['cod']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                    <div id="modal<?php echo $dados['cod']; ?>" class="modal">
                        <div class="modal-content">
                            <p>Tem certeza que deseja excluir esse registro?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="php_action/delete.php" method="POST">
                                <input type="hidden" name="cod" value="<?php echo $dados['cod']; ?>">
                                <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                            </form>
                         </div>
                    </div>
                </tr>
                <?php endwhile;
                else : ?>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <br><a href="adicionar.php" class="btn">Adicionar cliente</a>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>
<?php
include("conecta.php");
?>

<HTML><HEAD>
<TITLE>:: CRUD ::</TITLE>
</HEAD>
<BODY>
    <table>
        <colgroup>
            <col width="25%">
            <col width="50%">
            <col width="25%">
        </colgroup>
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
        <thead>
        <tbody>
            <?php
                $consulta = $conn->query('select cod,nome,email from cliente');
                while ($aux = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    echo "
                        <tr>
                            <td>".$aux["cod"]."</td>
                            <td>".$aux["nome"]."</td>
                            <td>".$aux["email"]."</td>
                        </tr>
                    ";
                }
            ?>
        </tbody>
    </table>       
 </BODY>
</html>
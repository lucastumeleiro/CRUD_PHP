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
                <th>Nome</th>
                <th>CPF</th>
                <th>...</th>
            </tr>
        <thead>
        <tfoot>
            <tr>
                <td>Nome</td>
                <td>CPF</td>
                <td>...</td>
            </tr>
        <tfoot>
        <tbody>
            <?php
                $consulta = $conn->query('select cod,nome from cliente');
                while ($aux = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    echo "
                        <tr>
                            <td>".$aux["cod"]."</td>
                            <td>".$aux["nome"]."</td>
                        </tr>
                    ";
                }
            ?>
        </tbody>
    </table>       
 </BODY>
</html>

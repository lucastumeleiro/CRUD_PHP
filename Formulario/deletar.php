<html>
    <head>
        <title>Delete</title>
        
    </head>
    <body>      
        <form name="form" method="get" action="deletar.php">
            <tr>
                <td><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Codigo: </font></b></td>
                <td><input type="text" name="Codigo" size ="20" class="campo"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="delete" Value="Delete" onclick='return deletar();' class="botao"></td>
            <tr>
        </form>
        <script>
            function deletar(){
                <?php
                    include("conecta.php");
                    $cod = $_GET["Codigo"];
                    try{
                        $stmt = $conn->prepare('delete from cliente where cod = :cod');
                        $stmt->bindParam(':cod', $cod); 
                        $stmt->execute();
                        
                        <div>"Usuario deletado com sucesso!";</div>
                        echo $stmt->rowCount(); 
                    } catch(PDOException $e) {
                        echo 'Error: ' . $e->getMessage();
                    }
                ?>               
            };
        </script>        
    </body>
</html>
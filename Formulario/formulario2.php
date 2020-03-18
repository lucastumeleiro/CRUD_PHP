
<?php
include("conecta.php");

$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$fone = $_POST["fone"];
$cidade = $_POST["cidade"];
$email = $_POST["email"];
$senha = $_POST["senha"];

?>
<HTML><HEAD>
<TITLE>:: Aula ::</TITLE>

<link href="estilo.css" rel="stylesheet" type="text/css">
<script>

function hidestatus(){
window.status=''
return true
}
</script>
</HEAD>
<BODY>
<CENTER>
</CENTER>
<TABLE width=720 height="518"
border=0 align=center cellPadding=0 cellSpacing=0 id=intContent>
  <TBODY>
    <TR>
          <?php
          try{
            $stmt = $conn->prepare('insert into cliente values (null,:nome,:endereco,:numero,:bairro,:fone,:cidade,:email,:senha)');
            $stmt->execute(array(
              ':nome' => $_POST["nome"],
              ':endereco' => $endereco,
              ':numero' => $numero,
              ':bairro' => $bairro,
              ':fone' => $fone,
              ':cidade' => $cidade,
              ':email' => $email,
              ':senha' => $senha
            ));
            
            print "Usuario criado com sucesso!";
            echo $stmt->rowCount();
          }catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
          }    
 		   ?>

       </table>
        </TBODY>
</TABLE> 

<div align="center"></div>
</BODY></HTML>











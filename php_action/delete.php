<?php
session_start();
require_once 'conecta.php';

$cod = mysqli_escape_string($connect, $_POST['cod']);
$sql = "DELETE FROM cliente WHERE cod = '$cod'";

if (mysqli_query($connect, $sql)) :
    $_SESSION['mensagem'] = "Deletado com sucesso!";
    header('Location: ../index.php');
else :
    $_SESSION['mensagem'] = "Erro ao Deletar!";
    header('Location: .../index.php');
endif;

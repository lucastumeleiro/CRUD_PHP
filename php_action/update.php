<?php
session_start();
require_once 'conecta.php';

$cod = mysqli_escape_string($connect, $_POST['cod']);
$nome = mysqli_escape_string($connect, $_POST['nome']);
$endereco = mysqli_escape_string($connect, $_POST['endereco']);
$numero = mysqli_escape_string($connect, $_POST['numero']);
$bairro = mysqli_escape_string($connect, $_POST['bairro']);
$telefone = mysqli_escape_string($connect, $_POST['telefone']);
$cidade = mysqli_escape_string($connect, $_POST['cidade']);
$email = mysqli_escape_string($connect, $_POST['email']);
$senha = mysqli_escape_string($connect, $_POST['senha']);

$sql = "UPDATE cliente SET nome ='$nome', endereco='$endereco', numero='$numero', bairro='$bairro', fone='$telefone',
     cidade='$cidade', email='$email', senha='$senha' WHERE cod = '$cod'";

if (mysqli_query($connect, $sql)) :
    $_SESSION['mensagem'] = "Editado com sucesso!";
    header('Location: ../index.php');
else :
    $_SESSION['mensagem'] = "Erro ao atualizar!";
    header('Location: .../index.php');
endif;

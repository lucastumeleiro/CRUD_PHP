<?php
session_start();
require_once 'conecta.php';

$nome = mysqli_escape_string($connect, $_POST['nome']);
$endereco = mysqli_escape_string($connect, $_POST['endereco']);
$numero = mysqli_escape_string($connect, $_POST['numero']);
$bairro = mysqli_escape_string($connect, $_POST['bairro']);
$telefone = mysqli_escape_string($connect, $_POST['telefone']);
$cidade = mysqli_escape_string($connect, $_POST['cidade']);
$email = mysqli_escape_string($connect, $_POST['email']);
$senha = mysqli_escape_string($connect, $_POST['senha']);

$sql = "INSERT INTO cliente(nome, endereco, numero, bairro, fone, cidade, email, senha) 
    VALUES ('$nome','$endereco','$numero','$bairro','$telefone','$cidade','$email', '$senha')";

if (mysqli_query($connect, $sql)) :
    $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    header('Location: ../index.php');
else :
    $_SESSION['mensagem'] = "Erro ao cadastrar!";
    header('Location: .../index.php');
endif;

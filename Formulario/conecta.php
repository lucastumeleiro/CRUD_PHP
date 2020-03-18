<?php
// Banco de dados
$dsn = 'mysql:dbname=formulario;host=127.0.0.1';
$user = 'root';
$pass = '';

try
{
   $conn = new PDO($dsn, $user, $pass);
   //$conn->setAttribute(PDO::ATRR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}

// vars
//$dir_min = "../foto/";
//$dir_foto = "../foto/";

// FTP
//$host_ftp="";
//$usuario_ftp="";
//$senha_ftp="";

//pasta ftp
//$pasta="foto";
//error_reporting(ALL);
?>

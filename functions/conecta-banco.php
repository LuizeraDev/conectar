<?php
// configurações do banco de dados
$servidor = "localhost";
$usuario_bd = "root";
$senha_bd = "usbw";
$banco = "db_conecta";

$con = new mysqli($servidor, $usuario_bd, $senha_bd, $banco);
mysqli_query($con, "set names 'utf8'"); // Esse código faz com que a inserção de acentuação no banco não seja afetada
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
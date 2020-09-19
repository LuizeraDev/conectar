<?php
require("conecta-banco.php");
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cep = $_POST["cep"];
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$tipo = $_POST['TipoConta'];

if($tipo == 1){
    $comandoSQL = "INSERT INTO tb_restaurante(nm_restaurante, email_restaurante, senha_restaurante, cep_restaurante, rua_restaurante, bairro_restaurante, cidade_restaurante, uf_restaurante) VALUES";
    $comandoSQL .= "('$nome', '$email', '$senha', '$cep', '$rua', '$bairro', '$cidade','$uf')";
    $res = $con->query($comandoSQL);
    $con->close();
    header("Location: ../pages/login.php");
}
else if($tipo == 2){
    $comandoSQL = "INSERT INTO tb_distribuidor(nm_distribuidor, email_distribuidor, senha_distribuidor, cep_distribuidor, rua_distribuidor, bairro_distribuidor, cidade_distribuidor, uf_distribuidor) VALUES";
    $comandoSQL .= "('$nome', '$email', '$senha', '$cep', '$rua', '$bairro', '$cidade','$uf')";
    $res = $con->query($comandoSQL);
    $con->close();
    header("Location: ../pages/login.php");
}
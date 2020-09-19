<?php
require "conecta-banco.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$mensagem = $_POST["mensagem"];

$comandoSQL = "INSERT INTO tb_contato(nm_contato, email_contato, telefone_contato, mensagem_contato) VALUES";
$comandoSQL .= "('$nome', '$email', '$telefone', '$mensagem')";
$res = $con->query($comandoSQL);
$con->close();
echo"<script>
alert('Enviado com sucesso!');
window.location.href='../index.php';
</script>";
?>
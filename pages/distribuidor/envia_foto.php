<?php 
session_start();
require "../../functions/conecta-banco.php";

$codigo_distribuidor = $_SESSION['cd_distribuidor'];

if(isset($_FILES['arquivo'])){
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $diretorio = "../../img_restaurantes/";

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio."FotodePerfil".$extensao);

    $comandoSQL = "UPDATE tb_distribuidor SET img_distribuidor='FotodePerfil$extensao' WHERE cd_distribuidor = $codigo_distribuidor";
    $con->query($comandoSQL) or die("algo deu errado");
    $con->close();
}
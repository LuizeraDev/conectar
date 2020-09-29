<?php
require("conecta-banco.php");
session_start();

$email = $_POST["email"];
$senha = $_POST["senha"];

if(empty($_POST["TipoConta"])){

    $email === "conectarhortifruti@gmail.com" && $senha === "conectar" ?  $_SESSION["logado"] = true :  $_SESSION["logado"] = false;
    
    if($_SESSION["logado"] == true){
      echo"<script>
      alert('administrador logado com sucesso!');
      window.location.href='../pages/admin.php';
      </script>";
    }
    else{
      echo"<script>
      alert('Senha errada...');
      window.location.href='../pages/login.php';
      </script>";
    }
}
else{
  /*
  * Executa a consulta no banco de dados.
  * Caso o número de linhas retornadas seja 1 o login é válido,
  * caso 0, inválido.
  */
  if($_POST["TipoConta"] == 1):
    $comandoSQL = "SELECT * from tb_restaurante WHERE email_restaurante='$email' AND senha_restaurante='$senha'";
    $resultado_usuario = mysqli_query($con, $comandoSQL) or die("Erro no banco de dados!");
    $total = mysqli_num_rows($resultado_usuario);
    
    if($total == 1)
    {
      $pegadados = mysqli_fetch_array($resultado_usuario);

      $_SESSION['cd_restaurante'] =  $pegadados['cd_restaurante'];
      $_SESSION['nm_restaurante'] =  $pegadados['nm_restaurante'];
      $_SESSION['email_restaurante'] = $pegadados['email_restaurante'];
      $_SESSION['logado'] = true;
      
      header("Location: ../pages/restaurante.php");
    }
    else{
      echo"<script>
      alert('Essa conta não existe...');
      window.location.href='../pages/login.php';
      </script>";
    }
  else:
    $comandoSQL = "SELECT * from tb_distribuidor WHERE email_distribuidor='$email' AND senha_distribuidor='$senha'";
    $resultado_usuario = mysqli_query($con, $comandoSQL) or die("Erro no banco de dados!");
    $total = mysqli_num_rows($resultado_usuario);

    if($total == 1)
    {
      $pegadados = mysqli_fetch_array($resultado_usuario);

      $_SESSION['cd_distribuidor'] =  $pegadados["cd_distribuidor"];
      $_SESSION['nm_distribuidor'] =  $pegadados["nm_distribuidor"];
      $_SESSION['email_distribuidor'] = $pegadados["email_distribuidor"];
      $_SESSION["logado"] = true;
      
      header("Location: ../pages/distribuidor.php");
    }
    else{
      echo"<script>
      alert('Essa conta não existe...');
      window.location.href='../pages/login.php';
      </script>";
    }
  endif;
}


<meta charset="utf-8">
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
    //VERIFICA SE O EMAIL JÁ ESTÁ SENDO UTILIZADO...
    $comandoSQL = "SELECT email_restaurante from tb_restaurante WHERE email_restaurante='$email'";
    $resultado_email = mysqli_query($con, $comandoSQL);
    $total = mysqli_num_rows($resultado_email);

    if($total){
        echo "<script>
        alert('A conta que você tentou criar já existe...');
        window.location.href='../pages/login.php';
        </script>";
    }
    else{
    //REGISTRA O RESTAURANTE
    $comandoSQL = "INSERT INTO tb_restaurante(nm_restaurante, email_restaurante, senha_restaurante, cep_restaurante, rua_restaurante, bairro_restaurante, cidade_restaurante, uf_restaurante) VALUES";
    $comandoSQL .= "('$nome', '$email', '$senha', '$cep', '$rua', '$bairro', '$cidade','$uf')";
    $res = $con->query($comandoSQL);

    //CRIA A PASTA COM O CÓDIGO DO RESTAURANTE PARA ARMANEZAR FOTO DO PERFIL
    $comandoSQL = "SELECT cd_restaurante from tb_restaurante WHERE email_restaurante='$email' AND senha_restaurante='$senha'";
    $resultado_usuario = mysqli_query($con, $comandoSQL) or die("Erro no banco de dados!");
    $codigo = mysqli_fetch_array($resultado_usuario);
    $dir = "../img_restaurantes/".$codigo[0];
    mkdir($dir, 0777);
    $con->close();

    header("Location: ../pages/login.php");
    }
}
else if($tipo == 2){
    //VERIFICA SE O EMAIL JÁ ESTÁ SENDO UTILIZADO...
    $comandoSQL = "SELECT email_distribuidor from tb_distribuidor WHERE email_distribuidor='$email'";
    $resultado_email = mysqli_query($con, $comandoSQL);
    $total = mysqli_num_rows($resultado_email);
    
    if($total){
        echo "<script>
        alert('A conta que você tentou criar já existe...');
        window.location.href='../pages/login.php';
        </script>";
    }
    else{
    //REGISTRA O DISTRIBUIDOR
    $comandoSQL = "INSERT INTO tb_distribuidor(nm_distribuidor, email_distribuidor, senha_distribuidor, cep_distribuidor, rua_distribuidor, bairro_distribuidor, cidade_distribuidor, uf_distribuidor) VALUES";
    $comandoSQL .= "('$nome', '$email', '$senha', '$cep', '$rua', '$bairro', '$cidade','$uf')";
    $res = $con->query($comandoSQL);
    
    //CRIA A PASTA COM O CÓDIGO DO DISTRIBUIDOR PARA ARMANEZAR FOTO DO PERFIL
    $comandoSQL = "SELECT cd_distribuidor from tb_distribuidor WHERE email_distribuidor='$email' AND senha_distribuidor='$senha'";
    $resultado_usuario = mysqli_query($con, $comandoSQL) or die("Erro no banco de dados!");
    $codigo = mysqli_fetch_array($resultado_usuario);
    $dir = "../img_distribuidores/".$codigo[0];
    mkdir($dir, 0777);
    $con->close();
    header("Location: ../pages/login.php");
    }
}
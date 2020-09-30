<meta charset="utf-8">
<?php 
session_start();
require "../../functions/conecta-banco.php";

$codigo_restaurante = $_SESSION['cd_restaurante'];

if(isset($_FILES['arquivo'])){
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));

    if($extensao === ".jpg" || $extensao === ".jpeg" ||  $extensao === ".png"){
        $diretorio = "../../img_restaurantes/".$codigo_restaurante."/";

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio."FotodePerfil".$extensao);
    
        $comandoSQL = "UPDATE tb_restaurante SET img_restaurante='FotodePerfil$extensao' WHERE cd_restaurante = $codigo_restaurante";
        $con->query($comandoSQL) or die("algo deu errado");
        $con->close();
        header("Location: editar-info.php");
    }
    else{
        echo "<script>alert('O formato de arquivo sugerido é inválido...');"; 
        echo "window.location.href='editar-info.php'</script>";
    }
}
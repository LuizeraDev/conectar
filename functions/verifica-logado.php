<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
if(empty($_SESSION["logado"])){
    echo"<script>
    alert('Você não está logado, por favor, faça login!');
    window.location.href='../pages/login.php';
    </script>";
}
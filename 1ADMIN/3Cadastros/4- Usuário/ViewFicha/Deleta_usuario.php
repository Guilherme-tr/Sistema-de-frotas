<?php
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/conexao.php";
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/verifica_login.php";


$usuario_id = $_GET['usuario_id'];

$query = "DELETE FROM USUARIO WHERE usuario_id = $usuario_id";

mysqli_query($conexao, $query);

header('location:../Usuário.php');
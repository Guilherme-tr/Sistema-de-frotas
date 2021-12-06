<?php
include $_SERVER['DOCUMENT_ROOT']."./verifica_login.php";
include $_SERVER['DOCUMENT_ROOT']."./conexao.php";


$id = $_GET['id'];
echo $id;
$query = "DELETE FROM funcionarios WHERE id = $id";

mysqli_query($conexao, $query);

header('location:../Funcionário.php');
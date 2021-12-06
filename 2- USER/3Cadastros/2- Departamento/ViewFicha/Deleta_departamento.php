<?php
include $_SERVER['DOCUMENT_ROOT']."./verifica_login.php";
include $_SERVER['DOCUMENT_ROOT']."./conexao.php";


$id_funcionario = $_GET['id'];
$id_departamento = $_GET['id_departamento'];

$query = "DELETE FROM DEPARTAMENTOS WHERE id_departamento = $id_departamento";

mysqli_query($conexao, $query);

header('location:../Departamento.php');
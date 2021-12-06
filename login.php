<?php
session_start();
include('./conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location:./index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$query = "SELECT tipo FROM usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";
$consulta_tipo = mysqli_query($conexao, $query);

$tipo = mysqli_fetch_array($consulta_tipo);
$tipo1 = $tipo['tipo'];
$result = mysqli_query($conexao, $query);
echo $tipo1;


$row = mysqli_num_rows($result);

if($row == 1 && $tipo1 == ('administrador')) {
	$_SESSION['usuario'] = $usuario;
	header('Location:./1ADMIN/1FichadeControle/FichaControle.php');
	exit();
}elseif ($row == 1 && $tipo1 == ('usuário')) {
	$_SESSION['usuario'] = $usuario;
	header('Location:./2- USER/3Cadastros/Cadastros.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location:./index.php');
	exit();
}
/*
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location:./1ADMIN/1FichadeControle\FichaControle.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location:./index.php');
	exit();
}
*/
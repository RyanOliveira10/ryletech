<?php
session_start();
include('conexao.php');

if(empty($_POST['user']) || empty($_POST['password'])) {
	header('Location: ../index.php');
	exit();
}

$user = mysqli_real_escape_string($mysql, $_POST['user']);
$password = mysqli_real_escape_string($mysql, $_POST['password']);

$query = "SELECT * FROM `users` WHERE `user` = '$user' AND `password` = '$password' ";

$result = mysqli_query($mysql, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['user'] = $user;
	header('Location: ../home.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../index.php');
	exit();
}?>
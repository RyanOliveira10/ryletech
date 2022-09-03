<?php

include '../conexao.php';

$user = $_POST['user'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$query = "INSERT INTO users (user, email, pass, phone) VALUES ('$user', '$email', '$password', '$phone');";

if (mysqli_query($mysql, $query)) {
  echo "dados cadastrados com sucesso";
  header("Location: ../login/login.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($mysql);
}

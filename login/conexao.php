<?php

header("Access-Control-Allow-Origin: *");

define('HOST','sql812.main-hosting.eu');
define('USER','u635830876_ryanoliveira');
define('PASSWORD','T?E#Bes/i:6K');
define('DBNAME','u635830876_ryletech');

$mysql = mysqli_connect(HOST, USER, PASSWORD, DBNAME) or die("falha ao conectar com o banco de dados");

if ($mysql->select_db( DBNAME )) {
  //query de teste
} else {
  exit();
}
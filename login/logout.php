<?php
session_start();
session_destroy();
header('Location: ../index.html');
echo "<script> window.confirm('voçê realmente deseja sair?') </script>";
exit();
?>
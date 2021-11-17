<?php
session_start();
unset($_SESSION['id_usuario']);
$_SESSION['username'] = "";

unset($_SESSION['tipo_conta']);
$_SESSION['tipo_conta'] = "";

header("location: ../index.php");
?>
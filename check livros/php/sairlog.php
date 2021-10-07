<?php
session_start();
unset($_SESSION['id_usuario']);
$_SESSION['username'] = "";
header("location: ../index.php");
?>
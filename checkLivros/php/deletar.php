<?php
    require('conexao.php');

    $id = $_GET['id'];
    $livro = $_GET['livro'];

    $sql = "DELETE FROM resenhas WHERE id_resenha= '$id'";
    $result = mysqli_query($conexao, $sql);
    
    header("location: resenhas.php?livro=$livro");
?>
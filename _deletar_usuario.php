<?php

include 'conexao.php';

$id = $_GET['id'];

    $deletar = "DELETE FROM `usuarios` WHERE `id`=$id";
    $fila = mysqli_query($conexao, $deletar);
    
    header("Location: aprovar_usuarios.php");

?>

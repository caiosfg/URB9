<?php

include 'conexao.php';

$id = $_GET['id'];
$status = $_GET['status'];

if($status == 'Inativo')
{
    $update = "UPDATE `usuarios` SET `status`= 'Ativo' WHERE `id`=$id";
    $atualizacao = mysqli_query($conexao, $update);
  
    header("Location: aprovar_usuarios.php");
}

?>

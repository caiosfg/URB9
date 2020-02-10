<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `imoveis` WHERE `id` = $id";
$deletar = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 500px;margin-top: 20px">
<h4 align="center" id="title">Imóvel Excluído !</h4>
<div style="padding-top: 20px">
<center>
<a href="listar_imoveis.php" role="button" class="btn btn-sm" background-color="#f84b00">Voltar</a>
</center>
 </div>      
</div>
<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `imoveis` WHERE `id` = $id";
$deletar = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="p-3 mb-2 bg-light text-dark">
<a class="logo" title="URB9"><img class="logo-urb9" src="https://urb9.com.br/assets/imagens/site/urbo9hcor.svg" alt=""></a>
</div>

<div class="container" style="width: 500px;margin-top: 20px">
<h4 align="center" id="title">Imóvel Excluído !</h4>
<div style="padding-top: 20px">
<center>
<a href="listar_imoveis.php" role="button" class="btn btn-danger btn-sm">Voltar</a>
</center>
 </div>      
</div>
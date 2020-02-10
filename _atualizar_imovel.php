<?php

include 'conexao.php';

$id = $_POST['id'];
//$codimovel = $_POST['codimovel'];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$especificacao = $_POST["especificacao"];
$regiao = $_POST["regiao"];
$valor = $_POST["valor"];

$sql = "UPDATE `imoveis` SET `nome`='$nome',`descricao`='$descricao',`especificacao`='$especificacao',`regiao`='$regiao',`valor`=$valor
WHERE `id` = $id";

$atualizar = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 500px;margin-top: 20px">
<h4 align="center" id="title">Atualizado com Sucesso !</h4>
<div style="padding-top: 20px">
<center>
<a href="listar_imoveis.php" role="button" class="btn btn-sm" background-color="#f84b00">Voltar</a>
</center>
 </div>      
</div>
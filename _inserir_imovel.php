<?php

include 'conexao.php';

$codimovel = $_POST['codimovel'];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$especificacao = $_POST["especificacao"];
$regiao = $_POST["regiao"];
$valor = $_POST["valor"];

$sql = "INSERT INTO `imoveis`(`codimovel`, `nome`, `descricao`, `especificacao`, `regiao`, `valor`)
 VALUES ($codimovel,'$nome','$descricao','$especificacao','$regiao',$valor)";

$inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 500px;margin-top: 20px">
<h4 align="center" id="title">Cadastrado com Sucesso !</h4>
<div style="padding-top: 20px">
<center>
<a href="index.php" role="button" class="btn btn-sm" background-color="#f84b00">Cadastrar novo</a>
</center>
 </div>      
        </div>
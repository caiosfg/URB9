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

<div class="p-3 mb-2 bg-light text-dark">
<a class="logo" title="URB9"><img class="logo-urb9" src="https://urb9.com.br/assets/imagens/site/urbo9hcor.svg" alt=""></a>
</div>


<div class="container" style="width: 500px;margin-top: 60px">
<h4 align="center" id="title">Cadastrado com Sucesso !</h4>
<div style="padding-top: 20px">
<center>
<a href="adicionar_imovel.php" role="button" class="btn btn-danger btn-sm">Cadastrar novo</a>
</center>
 </div>      
        </div>
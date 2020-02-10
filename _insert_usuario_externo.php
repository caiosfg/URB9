<?php

include 'conexao.php';
include 'script/password.php';


$nomeusuario = $_POST['nomeusuario'];
$mailusuario = $_POST['mailusuario'];
$senhausuario = $_POST['senhausuario'];
$perfilusuario = $_POST['perfilusuario'];
$status = 'Inativo';
                        

$sql = "INSERT INTO `usuarios`(`nome_usuario`, `mail_usuario`, `senha_usuario`, `perfil_usuario`,`status`) 
VALUES ('$nomeusuario','$mailusuario',sha1('$senhausuario'),$perfilusuario,'$status')";

$inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="p-3 mb-2 bg-light text-dark">
<a class="logo" title="URB9"><img class="logo-urb9" src="https://urb9.com.br/assets/imagens/site/urbo9hcor.svg" alt=""></a>
</div>

<div class="container" style="width: 500px;margin-top: 60px">
<h4 align="center" id="title">Registrado com Sucesso ! Aguarde aprovação</h4>
<div style="padding-top: 20px">
<center>
<a href="cadastro_usuario.php" role="button" class="btn btn-danger btn-sm">Voltar</a>
</center>
 </div>      
   </div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
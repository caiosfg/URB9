<?php

include 'conexao.php';

$id = $_GET['id'];
$status = $_GET['status'];

if($status == 'Inativo')
{
    $update = "UPDATE `usuarios` SET `status`= 'Ativo' WHERE `id`=$id";
    $atualizacao = mysqli_query($conexao, $update);
    echo "APROVADO !";
}

?>
<!-- 
<link rel="stylesheet" href="css/bootstrap.css">

<div class="p-3 mb-2 bg-light text-dark">
<a class="logo" title="URB9"><img class="logo-urb9" src="https://urb9.com.br/assets/imagens/site/urbo9hcor.svg" alt=""></a>
</div>

<div class="container" style="width: 500px;margin-top: 60px">
<h4 align="center" id="title">Registrado com Sucesso !</h4>
<div style="padding-top: 20px">
<center>
<a href="cadastro_usuario.php" role="button" class="btn btn-danger btn-sm">Voltar</a>
</center>
 </div>      
   </div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html> -->
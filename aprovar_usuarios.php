<!DOCTYPE html>
<html>
<head>
<title>Aprovação de Usuários</title>
<link rel="stylesheet" href="css/bootstrap.css">
<style type="text/css">
 #listContainer{
     color: #f84b00;
  }
  h4{
    color: #f84b00;
  }  
</style>
<script src="https://kit.fontawesome.com/ea21b4e337.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="p-3 mb-2 bg-light text-dark">
<a class="logo" title="URB9"><img class="logo-urb9" src="https://urb9.com.br/assets/imagens/site/urbo9hcor.svg" alt=""></a>
    <h4 align="center" id="title">Usuários</h4>
</div>


 <div class="container" id="listContainer" style="margin-top: 30px">
      <div style="text-align:right">
        <a href="menu.php" role="button" class="btn btn-danger btn-sm ">Voltar</a>
      </div>
    <br /> 
    <table class="table">
  <caption>Listagem de Usuários</caption>
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Status</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `usuarios` WHERE `status` = 'Inativo'";
            $busca = mysqli_query($conexao, $sql);

            while($array = mysqli_fetch_array($busca))
            {
                $id = $array['id'];
                $nome_usuario = $array['nome_usuario'];
                $mail_usuario = $array['mail_usuario'];
                $senha_usuario = $array['senha_usuario'];
                $perfil_usuario = $array['perfil_usuario'];
                $status = $array['status'];
        ?>

       <td><?php echo $nome_usuario ?></td>
       <td><?php echo $mail_usuario ?></td>    
       <td><?php echo $status ?></td>
       <td>
          <a class="btn btn-outline-warning btn-sm" href="_aprovar_usuario.php?id=<?php echo $id ?>&status=<?php echo $status ?>" role="button"><i class="fas fa-thumbs-up"></i>&nbsp;Aprovar</a>
          <a class="btn btn-outline-danger btn-sm" href="_deletar_usuario.php?id=<?php echo $id ?>" role="button"><i class="fas fa-window-close"></i>&nbsp;Delete</a>
       </td>
      </tr>  
    <?php 
        }
    ?>

    </tr>
     </tbody>
</table>
</div>


<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
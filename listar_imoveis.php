<!DOCTYPE html>
<html>
<head>
<title>Cadastro de Imóveis</title>
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
    <h4 align="center" id="title">Listagem de Imóveis</h4>
</div>


 <div class="container" id="listContainer" style="margin-top: 30px">
      <div style="text-align:right">
        <a href="index.php" role="button" class="btn btn-danger btn-sm ">Voltar</a>
      </div>
        <h4>Base de Imóveis</h4>
    <br /> 
    <table class="table">
  <caption>Listagem de Patrimônios</caption>
  <thead>
    <tr>
      <th scope="col">Cod.Imóvel</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Especificação</th>
      <th scope="col">Região</th>
      <th scope="col">Valor</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `imoveis`";
            $busca = mysqli_query($conexao, $sql);

            while($array = mysqli_fetch_array($busca))
            {
                $id = $array['id'];
                $codimovel = $array['codimovel'];
                $nome = $array['nome'];
                $descricao = $array['descricao'];
                $especificacao = $array['especificacao'];
                $regiao = $array['regiao'];
                $valor = $array['valor'];
        ?>

       <td><?php echo $codimovel ?></td>
       <td><?php echo $nome ?></td>
       <td><?php echo $descricao ?></td>
       <td><?php echo $especificacao ?></td>
       <td><?php echo $regiao ?></td>
       <td><?php echo $valor ?></td>
       <td>
          <a class="btn btn-outline-warning btn-sm" href="editar_produto.php?id=<?php echo $id ?>" role="button"><i class="fas fa-home"></i>&nbsp;Editar</a>
          <a class="btn btn-outline-danger btn-sm" href="deletar_imovel.php?id=<?php echo $id ?>" role="button"><i class="fas fa-house-damage"></i>&nbsp;Delete</a>
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
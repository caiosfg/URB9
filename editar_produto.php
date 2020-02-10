<?php

include 'conexao.php';
$id = $_GET['id'];

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
<style type="text/css">
 #cdContainer{
     width: 500px;
     font-family: HurmeBold;
     font-weight: bold;
     color: #f84b00;
  }
  #title{
    color: #f84b00;  
  }
  #botao{
    background-color: #f84b00;  
  }
</style>
</head>
<body>
<div class="p-3 mb-2 bg-light text-dark">
<a class="logo" href="__" title="URB9"><img class="logo-urb9" src="https://urb9.com.br/assets/imagens/site/urbo9hcor.svg" alt=""></a>
    <h4 align="center" id="title">Editar Imóvel</h4>
</div>

 <div class="container" id="cdContainer" style="margin-top: 30px">
    <form action="_atualizar_imovel.php" method="post">
        <?php
            $sql = "SELECT * FROM `imoveis` WHERE id = $id";
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

        <div class="form-group">
            <label>Código</label>
            <input type="number" class="form-control" name="codimovel" value="<?php echo $codimovel ?>" disabled>
            <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
        </div>
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" class="form-control" name="descricao" value="<?php echo $descricao ?>">
        </div>
        <div class="form-group">
             <label>Especificação</label>
                <select class="form-control" name="especificacao" value="<?php echo $especificacao ?>">
                    <option>Venda</option>
                    <option>Aluguel</option>
                </select>
        </div>
        <div class="form-group">
             <label>Região</label>
                <select class="form-control" name="regiao" value="<?php echo $regiao ?>">
                    <option>Zona Oeste</option>
                    <option>Zona Sul</option>
                    <option>Zona Norte</option>
                    <option>Zona Leste</option>
                </select>
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input type="number" class="form-control" name="valor" value="<?php echo $valor ?>">
        </div>
        <div style="text-align: right;">
            <button type="money" id="botao" align="right" class="btn btn-sm">Atualizar</button>
        </div>
      <?php } ?>
    </form>
 </div>



<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
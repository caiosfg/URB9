<!DOCTYPE html>
<html>
<head>
<title>Cadastro de Imóveis</title>
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
    <h4 align="center" id="title">Cadastramento de Imóveis</h4>
</div>


 <div class="container" id="cdContainer" style="margin-top: 30px">
    <form action="_inserir_imovel.php" method="post">
        <div class="form-group">
            <label>Código</label>
            <input type="number" class="form-control" name="codimovel" placeholder="Codigo da Residência" required>
        </div>
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome da Residência" required>
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" class="form-control" name="descricao"placeholder="Descreva mais sobre o patrimônio" autocomplete="off" required>
        </div>
        <div class="form-group">
             <label>Especificação</label>
                <select class="form-control" name="especificacao" required>
                    <option>Venda</option>
                    <option>Aluguel</option>
                </select>
        </div>
        <div class="form-group">
             <label>Região</label>
                <select class="form-control" name="regiao" required>
                    <option>Zona Oeste</option>
                    <option>Zona Sul</option>
                </select>
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input type="number" class="form-control" placeholder="Valor pretendido" name="valor" required>
        </div>
        <div style="text-align: right;">
            <button type="money" id="botao" align="right" class="btn btn-sm">Registrar</button>
        </div>
    </form>
 </div>



<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
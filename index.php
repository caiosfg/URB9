<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link rel="stylesheet" href="css/bootstrap.css">
<script src="https://kit.fontawesome.com/ea21b4e337.js" crossorigin="anonymous"></script>
<style type="text/css">
 #tamanho{
     width: 400px;
     font-weight: bold;
     color: #f84b00;
     -webkit-box-shadow: 10px 10px 21px 0px rgba(219,128,112,1);
     -moz-box-shadow: 10px 10px 21px 0px rgba(219,128,112,1);
      box-shadow: 10px 10px 21px 0px rgba(219,128,112,1);
  }  
</style>
</head>
<body>

<div class="p-3 mb-2 bg-light text-dark">
<a class="logo" title="URB9"><img class="logo-urb9" src="https://urb9.com.br/assets/imagens/site/urbo9hcor.svg" alt=""></a>
</div>

<div class="container" id="tamanho" style="margin-top:50px;border-radius: 15px; border: 2px solid #E30428">
  <div style="padding: 10px">
  <center>
  <img src="./imagens/housesafe.png" width="125px" height="125px">
  </center>
    <form>
        <div class="form-group">
            <label>Usuário</label>
            <input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
        </div>    
        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="usuario" class="form-control" placeholder="Senha" autocomplete="off" required>
        </div>    
    </form>
    <div style="text-align: right;">
            <button type="submit" class="btn btn-danger btn-sm">Entrar</button>
    </div> 
  </div>
</div>

<div style="magin-top: 10px">
  <center>
      <small>Registre-se<a href='cadastro_usuario_externo.php'> aqui</a></small>
  </center>
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
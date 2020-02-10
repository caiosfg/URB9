<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link rel="stylesheet" href="css/bootstrap.css">
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
  <h5>Cadastro de Usuário</h5>  
  </center>
   <div class="container" id="cdContainer" style="margin-top: 30px">
     <div style="text-align:right">
        <a href="index.php" role="button" class="btn btn-danger btn-sm ">Voltar</a>
    </div>
    <form action="_insert_usuario_externo.php" method="post"> 
        <div class="form-group">
            <label>Nome Usuário</label>
            <input type="text" name="nomeusuario" class="form-control" placeholder="Nome Completo" autocomplete="off" required>
        </div>  
        <div class="form-group">
            <label>E-mail</label>
            <input type="text" name="mailusuario" class="form-control" placeholder="Seu E-mail" autocomplete="off" required>
        </div>     
        <div class="form-group">
            <label>Senha do Usuário</label>
            <input id="txtSenha" type="password" name="senhausuario" class="form-control" placeholder="Digite sua Senha" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Repetir Senha</label>
            <input type="password" name="senhausuario2" class="form-control" placeholder="Repita sua Senha" oninput="validaSenha(this)" autocomplete="off" required>
            <small>As senhas precisam coincidir.</small>
        </div>    
        <div class="form-group">
             <label>Perfil de Usuário</label>
                <select name="perfilusuario" class="form-control" required>
                    <option value="1">Consultor</option>
                    <option value="2">Proprietário</option>
                </select>
        </div>
        
        <div style="text-align: right;">
            <button type="submit" class="btn btn-danger btn-sm">Cadastrar</button>
    </div>   
    </form>
    
  </div>
</div>

<script>
function validaSenha (input){ 
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
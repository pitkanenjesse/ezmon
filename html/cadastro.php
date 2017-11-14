<!-- Formulário de cadastro de usuário do sistema -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Cadastro Usuario - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href=bootstrap.min.css rel="stylesheet">
    <style type="text/css">
        
    </style>
    <script src=jquery-1.11.1.min.js></script>
    <script src=bootstrap.min.js></script>
</head>
<body>
<form action="insere.php"  method="post" class="form-horizontal">
<fieldset>


<!-- Form Name -->
<legend>Cadastro do Usuário</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="idNome">Nome</label>  
  <div class="col-md-5">
  <input id="idNome" name="idNome" type="text" placeholder="Nome do usuário" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="idUsuario">Usuário</label>  
  <div class="col-md-5">
  <input id="idUsuario" name="idUsuario" type="text" placeholder="Login do usuario" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="idSenha">Senha</label>
  <div class="col-md-5">
    <input id="idSenha" name="idSenha" type="password" placeholder="Digite a senha" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="idConfirmar"></label>
  <div class="col-md-8">
    <input type="submit" "insere.php" value="Cadastrar"> 
    <button><a href="usuarios.php">Cancelar</a></button>
  </div>
</div>

</fieldset>
</form>
<script type="text/javascript">
</script>
</body>
</html>

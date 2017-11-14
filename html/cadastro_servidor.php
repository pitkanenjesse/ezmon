<!DOCTYPE html>
<!-- Formulário de cadastro de servidores -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Cadastro de servidor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href=bootstrap.min.css rel="stylesheet">
    <style type="text/css">
        
    </style>
    <script src=jquery-1.11.1.min.js></script>
    <script src=bootstrap.min.js></script>
</head>
<body>
<form action="insere_servidor.php"  method="post" class="form-horizontal">
<fieldset>


<!-- Form Name -->
<legend>Cadastro de Servidores</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="idServidor">Servidor</label>  
  <div class="col-md-5">
  <input id="idServidor" name="idServidor" type="text" placeholder="Nome do servidor" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="idLink">Link</label>  
  <div class="col-md-5">
  <input id="idLink" name="idLink" type="text" placeholder="Link do servidor" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="idLink">Usuario</label>
  <div class="col-md-5">
  <input id="idUsuario" name="idUsuario" type="text" placeholder="Usuario SSH" class="form-control input-md" required="">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="idServidor">Porta</label>
  <div class="col-md-5">
  <input id="idPorta" name="idPorta" type="text" placeholder="Porta de conexão SSH" class="form-control input-md" required="">
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
    <input type="submit" "insere_servidor.php" value="Cadastrar"> 
    <button><a href="servidores.php">Cancelar</a></button>
  </div>
</div>

</fieldset>
</form>
<script type="text/javascript">
</script>
</body>
</html>

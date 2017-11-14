<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Troca senha root</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href=bootstrap.min.css rel="stylesheet">
    <style type="text/css">
        
    </style>
    <script src=jquery-1.11.1.min.js></script>
    <script src=bootstrap.min.js></script>
</head>
<body>
<form action="troca_senha_insere.php"  method="post" class="form-horizontal">
<fieldset>

<legend>Troca senha root</legend>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="idSenha">Senha</label>
  <div class="col-md-5">
    <input id="idSenha" name="idSenha" type="password" placeholder="Digite a senha nova" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="idConfirmar"></label>
  <div class="col-md-8">
    <input type="submit" "troca_senha_insere.php" value="Trocar"> 
    <button><a href="comandos.php">Cancelar</a></button>
  </div>
</div>

</fieldset>
</form>
<script type="text/javascript">
</script>
</body>
</html>

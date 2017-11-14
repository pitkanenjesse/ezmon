<!-- Formulário de cadastro de e-mail do sistema Ezmon -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Cadastro de E-mail</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href=bootstrap.min.css rel="stylesheet">
    <style type="text/css">
        
    </style>
    <script src=jquery-1.11.1.min.js></script>
    <script src=bootstrap.min.js></script>
</head>
<body>
<form action="insere_email.php"  method="post" class="form-horizontal">
<fieldset>


<!-- Form Name -->
<legend>Cadastro de E-mail</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="idNome">Nome</label>  
  <div class="col-md-5">
  <input id="idNome" name="idNome" type="text" placeholder="Nome do resonsável" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="idEmail">E-mail</label>  
  <div class="col-md-5">
  <input id="idEmail" name="idEmail" type="text" placeholder="Email do responsável" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="idConfirmar"></label>
  <div class="col-md-8">
    <input type="submit" "insere_email.php" value="Cadastrar"> 
    <button><a href="config.php">Cancelar</a></button>
  </div>
</div>

</fieldset>
</form>
<script type="text/javascript">
</script>
</body>
</html>

<?php

$senha = $_POST["idSenha"];

system("sudo -u root echo ".$senha." > /tmp/senha");


?>

<p>Efetuando a troca de senha nos servidores!</p>
<button><a href="comandos.php">Voltar para a tela de comandos</a></button>
<p></p>
<button><a href="troca_senha.html">Entrar na tela de acompanhamento</a></button>


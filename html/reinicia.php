<?php
//Código php que reinicia os processos do sistema de monitoramento
system("sudo -u root echo restart > /tmp/rodaphp");
flush();
?>
<div>Serviço reiniciado com sucesso!</div>
<button><a href="comandos.php">Voltar</a></button>

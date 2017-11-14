<?php
//Código php que inicia o processo de reinicio dos servidores.
system("sudo -u root echo reboot > /tmp/reboot");
flush();
?>
<p>Reiniciando servidores!</p>
<button><a href="comandos.php">Voltar para a tela de comandos</a></button>
<button><a href="reinicia.html">Entrar na tela de acompanhamento</a></button>

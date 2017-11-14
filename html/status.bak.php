<?php
//Código php que mostra os PIDS dos serviços
$online = shell_exec("sudo -u root ps -ef | grep -v grep | grep /ezmon/ezmon | awk  '{print $2}' | awk NR==1");
echo  "<div>Serviço de verificação de status rodando com PID:.".$online."</div>";

$atualiza = shell_exec("sudo -u root ps -ef | grep -v grep | grep /ezmon/ezmon | awk  '{print $2}' | awk NR==2");
echo  "<div>Serviço de atualização de lista de clientes rodando com PID:".$atualiza."</div>";

$verifica = shell_exec("sudo -u root ps -ef | grep -v grep | grep /ezmon/ezmon | awk  '{print $2}' | awk NR==3");
echo "<div>Serviço de monitoramento rodando com PID:".$verifica."</div>";

$reativo = shell_exec("sudo -u root ps -ef | grep -v grep | grep /ezmon/ezmon | awk  '{print $2}' | awk NR==4");
echo "<div>Serviço reativo rodando com PID:".$reativo."</div>";

$email = shell_exec("sudo -u root ps -ef | grep -v grep | grep /ezmon/ezmon | awk  '{print $2}' | awk NR==5");
echo "<div>Serviço de email rodando com PID:".$email."</div>";

?>

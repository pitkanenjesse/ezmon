<!DOCTYPE html>
<!-- Página inicial do sistema que exibe dados importantes sobre o sistema e em qual ID o processo está rodando -->
<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Ezmon</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href=bootstrap.min.css rel="stylesheet">
    <style type="text/css">

.container
{
    width:800px;
    overflow:hidden;
    display:inline-block;
}
.side-bar
{
    background:#74AFAD;
    position:absolute;
    height:100%;
    width:200px;
    color:#fff;
    transition: margin-left 0.5s;
}

.side-bar ul
{
    list-style:none;
    padding:0px;
    
}

.side-bar ul li.menu-head
{
    font-family: 'Lato', sans-serif;
    padding:20px;
}


.side-bar ul li.menu-head a
{
    color:#fff;
    text-decoration:none;
    height:50px;
}


.side-bar ul .menu-head  a
{
    color:#fff;
    text-decoration:none;
    height:50px;
}

.side-bar ul .menu li  a 
{
    color:#fff;
    text-decoration:none;
    display:inline-table;
    width:100%;
    padding-left:20px;
    padding-right:20px;
    padding-top:10px;
    padding-bottom:10px;
}

.side-bar ul .menu li  a:hover
{
    border-left:3px solid #ECECEA;    
    padding-left:17px;
}

.side-bar ul .menu li  a.active
{
    padding-left:17px;
    background:#D9853B;
    border-left:3px solid #ECECEA;
}

.side-bar ul .menu li  a.active:before {
   content:"";
   position: absolute;
   width: 0;
   height: 0;
   border-top: 20px solid transparent;
    border-bottom: 20px solid transparent;
	
	border-left: 7px solid #D9853B;
    margin-top: -10px;
    margin-left: 180px;
}


.content
{
    padding-left: 200px;
    transition: padding-left 0.5s;
}

.active > .side-bar
{
    margin-left:-150px;   
    transition: margin-left 0.5s;
}

.active > .content
{
    padding-left:50px;
    transition: padding-left 0.5s;
}
    </style>
    <script src=jquery-1.11.1.min.js></script>
    <script src=bootstrap.min.js></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="wrapper">
    	    <div class="side-bar">
                <ul>
                    <li class="menu-head">
                        EZMON <a href="index.php" class="push_menu"><span class="glyphicon glyphicon-align-justify pull-right"></span></a>
                    </li>
                    <div class="menu">
                         <li>
                            <a href="index.php">Home<span class="glyphicon  pull-right"></span></a>
                        </li>
			<li>
                            <a href="monitoramento.php">Monitoramento<span class="glyphicon  pull-right"></span></a>
                        </li>
                        <li>
                            <a href="servidores.php">Servidores<span class="glyphicon  pull-right"></span></a>
                        </li>
                        <li>
                            <a href="usuarios.php">Usuários <span class="glyphicon  pull-right"></span></a>
                        </li>
                        <li>
                            <a href="comandos.php">Comandos<span class="glyphicon  pull-right"></span></a>
                        </li>

<li>
                            <a href="config.php">Configurações<span class="glyphicon  pull-right"></span></a>
                        </li>


			<li>
                            <a href="contato.php">Contato<span class="glyphicon  pull-right"></span></a>
                        </li>
                    </div>
                    
                </ul>
    	    </div>   
            <div class="content">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><b><font size=5>Ezmon</font></b></div>
                        <div class="panel-body">
                           <b><font size=3> Sistema de monitoramento e gerenciamento de servidores Linux.</b></font>                        </div>
			<div class="container-fluid">
			-O sistema está reativo para os serviços de NFS, Mysql e Webserver, se o serviço parar no servidor cliente, o sistema tentará reiniciar o serviço.
			</div>
			<div class="container-fluid">
			-O sistema enviará avisos por e-mail a cada 30 minutos quando a memória RAM disponível estiver abaixo de 150Mb, o armazenamento disponível estiver menor que 50Gb, o processamento estiver maior ou igual a 400% e se o software estiver parado(php) nos servidores clientes.
			</div>

			<p>
			<div class="container"><b><font size=3>Status:</font></b></div>

			<?php
$online = shell_exec("sudo -u root ps -ef | grep -v grep | grep /ezmon/ezmon | awk  '{print $2}' | awk NR==1");
echo  "<div class=container>Serviço de verificação de status rodando com o PID:<b>".$online."</b>.</div>";

$atualiza = shell_exec("sudo -u root ps -ef | grep -v grep | grep /ezmon/ezmon | awk  '{print $2}' | awk NR==2");
echo  "<div class=container>Serviço de atualização de lista de clientes rodando com o PID:<b>".$atualiza."</b>.</div>";

$verifica = shell_exec("sudo -u root ps -ef | grep -v grep | grep /ezmon/ezmon | awk  '{print $2}' | awk NR==3");
echo "<div class=container>Serviço de monitoramento rodando com o PID:<b>".$verifica."</b>.</div>";

$reativo = shell_exec("sudo -u root ps -ef | grep -v grep | grep /ezmon/ezmon | awk  '{print $2}' | awk NR==4");
echo "<div class=container>Serviço reativo rodando com o PID:<b>".$reativo."</b>.</div>";

$email = shell_exec("sudo -u root ps -ef | grep -v grep | grep /ezmon/ezmon | awk  '{print $2}' | awk NR==5");
echo "<div class=container>Serviço de email rodando com o PID:<b>".$email."</b>.</div>";

?>




                    </div>
                </div>
            </div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $(".push_menu").click(function(){
         $(".wrapper").toggleClass("active");
    });
});
</script>
</body>
</html>

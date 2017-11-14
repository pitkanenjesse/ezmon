<!DOCTYPE html>
<!-- Página em que são executados os comandos no sistema  -->
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
                        <div class="panel-heading"><b><font size=5>Comandos</font></b></div>
                        <div class="panel-body">
			<button type=button class= btn btn-info onclick='document.location="inicia.php" '><b>Inicia Ezmon</b></button>
			<button type=button class= btn btn-info onclick='document.location="para.php" '><b>Para Ezmon</b></button>
			<button type=button class= btn btn-info onclick='document.location="reinicia.php" '><b>Reinicia Ezmon</b></button>                            
			<button type=button class= btn btn-info onclick='document.location="troca_senha.php" '><b>Troca senha root</b></button>
			<button type=button class= btn btn-info onclick='document.location="cadastro.php" '><b>Troca porta SSH</b></button>
			<button type=button class= btn btn-info onclick='document.location="reboot.php" '><b>Reinicia servidores</b></button>
                     </div>
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

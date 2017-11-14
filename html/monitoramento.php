<!DOCTYPE html>
<!-- Página principal de monitoramento -->
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
    width:1600px;
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
                        EZMON <a href="#" class="push_menu"><span class="glyphicon glyphicon-align-justify pull-right"></span></a>
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
                        <div class="panel-heading"><b><font size=5>Monitoramento</font></b></div>
                        <div class="panel-body">
                        <?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "ezmon";
$user = "root";
$pass = "123456";
// conecta ao banco de dados
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR);
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT nome_monitor, ip_monitor, mysql, nfs, webserver, software, memoria_livre, memoria_usado, memoria_total, processamento, armazenamento_livre, armazenamento_usado, armazenamento_total, conexao FROM monitor");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
?>

<html>
<body>


<div id="contadorLabel"></div>

<button type=button class=btn btn-info onclick="alerta30()"><b>Atualizar</b></button>



<script>
var limitador = 30
var counter = limitador;

function Redireciona() {
top.document.location = "monitoramento.php"
}


function alerta30(){
Redireciona();
counter = limitador
}


function contador(){

	
    --counter
    console.log(counter);
    str = "Nova atualização em " + counter+ " segundos";
    document.getElementById('contadorLabel').innerHTML = str
 
 if(counter == 0){
 alerta30();
 counter = limitador
 }
 
}

    setInterval(function(){ contador() }, 1000);

</script>
	
    <table class="table table-bordered table-inverse">
    <thead>


<?php
        echo "<tr><th><b>Nome:</b></th><th>Link:</th><th>Mysql:</th><th>Nfs:</th><th>Web:</th><th>Software:</th><th>Ram livre:</th><th>Ram usada:</th><th>Ram total:</th><th>Processamento:</th><th>HD livre:</th><th>HD usado:</th><th>HD total:</th> <th>Conexão:</th></tr> ";


        // se o número de resultados for maior que zero, mostra os dados
        if($total > 0) {
                // inicia o loop que vai mostrar todos os dados
                do {
	echo "</thead>";
	echo "<tbody>";
                        echo "<tr><td>".$linha['nome_monitor']."</td><td>".$linha['ip_monitor']."</td><td>".$linha['mysql']."</td><td>".$linha['nfs']."</td><td>".$linha['webserver']."</td><td>".$linha['software']."</td><td>".$linha['memoria_livre']."</td><td>".$linha['memoria_usado']."</td><td>".$linha['memoria_total']."</td><td>".$linha['processamento']."</td><td>".$linha['armazenamento_livre']."</td><td>".$linha['armazenamento_usado']."</td><td>".$linha['armazenamento_total']."</td><td>".$linha['conexao']."</td></tr>";
                ?>

<?php
                // finaliza o loop que vai mostrar os dados
                }while($linha = mysql_fetch_assoc($dados));
        // fim do if 
        }
?>

  </tbody>

</body>
</html>
<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>

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

<?php
    //Código php que insere novos servidores ao banco de dados
    //verifica se existe conexão com bd, caso não tenta criar uma nova
    $conexao = mysql_connect("localhost","root","123456") //porta, usuário, senha
    or die("Erro na conexão com banco de dados"); //caso não consiga conectar mostra a mensagem de erro mostrada na conexão

    $select_db = mysql_select_db("ezmon"); //seleciona o banco de dados

    //Abaixo atribuímos os valores provenientes do formulário pelo método POST
    $nome_servidor = $_POST["idServidor"];
    $link = $_POST["idLink"];
    $usuario = $_POST["idUsuario"];
    $porta = $_POST["idPorta"];
    $senha = $_POST["idSenha"];    

    $string_sql = "INSERT INTO servidores (nome_servidor, ip) VALUES ('$nome_servidor','$link')"; //String com consulta SQL da inserção

    $string_sql2 = "INSERT INTO monitor (nome_monitor, ip_monitor) VALUES ('$nome_servidor', '$link')";
	
    mysql_query($string_sql,$conexao); //Realiza a consulta
    mysql_query($string_sql2,$conexao);	

    system("sudo -u root echo ".$porta." ".$usuario."  ".$link." ".$senha." >/tmp/deploy ");

    if(mysql_affected_rows() == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        echo "<p>Cadastro efetuado com sucesso</p>";
        echo '<button><a href="servidores.php">Voltar para a tela de servidores</a></button>'; //Apenas um link para retornar para o formulário de cadastro
    } else {
        echo "Erro, não possível inserir no banco de dados";
	echo '<button><a href="servidores.php">Voltar para a tela de servidores</a></button>';
    }

    mysql_close($conexao); //fecha conexão com banco de dados 
?>


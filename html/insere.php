<?php
    //Código php que insere usuários no banco de dados.
    //verifica se existe conexão com bd, caso não tenta criar uma nova
    $conexao = mysql_connect("localhost","root","123456") //porta, usuário, senha
    or die("Erro na conexão com banco de dados"); //caso não consiga conectar mostra a mensagem de erro mostrada na conexão

    $select_db = mysql_select_db("ezmon"); //seleciona o banco de dados

    //Abaixo atribuímos os valores provenientes do formulário pelo método POST
    $nome = $_POST["idNome"];
    $user = $_POST["idUsuario"];
    $senha = $_POST["idSenha"];

    $string_sql = "INSERT INTO usuarios (nome, usuario, senha) VALUES ('$nome','$user','$senha')"; //String com consulta SQL da inserção

    mysql_query($string_sql,$conexao); //Realiza a consulta

    if(mysql_affected_rows() == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        echo "<p>Cadastro efetuado com sucesso</p>";
        echo '<button><a href="usuarios.php">Voltar para a tela de usuários</a></button>'; //Apenas um link para retornar para o formulário de cadastro
    } else {
        echo "Erro, não possível inserir no banco de dados";
    }

    mysql_close($conexao); //fecha conexão com banco de dados 
?>


<?php
//Código php que exclui e-mails.
$conexao = mysql_connect("localhost", "root", "123456"); // Mapeando o caminho do banco de dados
if (!$conexao) // Verificando se existe conexão com o caminho mapeado
{
die('Erro ao conectar: ' . mysql_error()); // Caso o caminho esteja errado, o usuário ou a senha esteja errado, irá mostrar esta mensagem
}
mysql_select_db("ezmon", $conexao); // Selecionando o banco de dados

$email = $_GET['email']; // Recebendo o valor enviado pelo link

mysql_query("DELETE FROM email WHERE email='".$email."'") or exit(mysql_error()); // A instrução delete irá apagar todos os dados da id recebida

mysql_close($conexao); // Fechando a conexão com o banco de dados

echo "Registro excluído com sucesso!";
echo '<button><a href="config.php">Voltar para a tela de Configurações</a></button>';
?>

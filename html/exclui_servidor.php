<?php
//Código php que exclui servidores do banco de dados.
$conexao = mysql_connect("localhost", "root", "123456"); // Mapeando o caminho do banco de dados
if (!$conexao) // Verificando se existe conexão com o caminho mapeado
{
die('Erro ao conectar: ' . mysql_error()); // Caso o caminho esteja errado, o usuário ou a senha esteja errado, irá mostrar esta mensagem
}
mysql_select_db("ezmon", $conexao); // Selecionando o banco de dados

$ip = $_GET['ip']; // Recebendo o valor enviado pelo link

mysql_query("DELETE FROM servidores WHERE ip='".$ip."'") or exit(mysql_error()); // A instrução delete irá apagar todos os dados da id recebida
mysql_query("DELETE FROM monitor WHERE ip_monitor='".$ip."'") or exit(mysql_error());

mysql_close($conexao); // Fechando a conexão com o banco de dados

echo "Registro excluído com sucesso!";
echo '<button><a href="servidores.php">Voltar para a tela de servidores</a></button>';
?>

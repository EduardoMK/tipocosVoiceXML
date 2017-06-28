<?php
$pst_nome = $_REQUEST["nome_da_lista"];

$host = "mysql.hostinger.com.br";
$usuario = "u411077152_topic";
$passwd = "topicos2017";
$nome = "u411077152_topic";

$con = mysqli_connect($host, $usuario, $passwd, $nome);

print ('<vxml version="2.1" xml:lang="pt-BR">');

print ('  <form id="teste">');
print ('     <block>');
print ('    	<prompt>');

/*
	$sql = "select nome from lista where nome = '{$pst_nome}'";
	$result = mysql_query($con, $sql);
	*/
    print (' O nome pesquisado é ' . $pst_nome);

	
print ('    	</prompt>');
print ('    </block>');
print ('  </form>');
print ('</vxml>');

?>

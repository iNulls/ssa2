<?php

$hostname = "localhost";
$user = "root";
$password = "1578901";
$database = "ssa";
$conexao = mysqli_connect($hostname, $user, $password, $database);

if (!$conexao) {
	print "Falha na conexão com o Banco de Dados";
}

?>
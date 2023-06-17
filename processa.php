<?php

include_once("conexao.php");
 
$nome =	$_POST['nome'];
$nascimento = $_POST['nascimento'];
$turma = $_POST['turma'];

$sql = "insert into alunos (nome, nascimento, turma) values ('$nome', '$nascimento', '$turma')";

$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Confirmação de Cadastro</title>
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<div class="caixa">
			<nav>
				<ul class="menu">
					<h1><img src="imagens/logo-SSA.png"></h1>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="lancamento.php">Lançamento de Notas</a></li>
					<li><a href="buscar-turma.php">Buscar Turma/Aluno</a></li>
					<li><a href="relatorio.php">Relatorio</li></a>
				</ul>
			</nav>
			<section>
				<h1>Confirmação de Cadastro</h1>
				<hr><br><br>

				<?php

				if($linhas == 1) {
					echo "Cadastro Efetuado com Sucesso!";
				} else {
					echo "Cadastro NÂO efetuado.";
				}

				?>

				<br><br>
			</section>
		</div>
	</body>
</html>
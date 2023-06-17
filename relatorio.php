<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from alunos where nome like '%$filtro%' or turma like '%$filtro%' order by nome";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);


?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>SSA - Relatorio</title>
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
				<h1>Relatorio</h1>
				<hr><br><br>

				<form method="get" action="">
					<strong class="pesquisa">Filtrar por nome/turma:</strong>
					<input type="text" name="filtro" class="campo" required autofocus>
					<input type="submit" value="Pesquisar" class="button">
				</form>

				<?php

				echo "Resultado da pesquisa com a palavra: <strong class='pesquisa'>$filtro</strong>.<br><br>";

				echo "$registros registros encontrados.";
				echo "<br><br>";

				while($exibirRegistros = mysqli_fetch_array($consulta)) {
					$matricula = $exibirRegistros[1];
					$nome = $exibirRegistros[2];
					$turma = $exibirRegistros[4];

					echo "<article>";

					echo "Matricula: $matricula<br>";
					echo "Aluno: $nome<br>";
					echo "Turma: $turma<br>";
					

					echo "</article>";
				}

				mysqli_close($conexao);

				?>

			</section>
		</div>
	</body>
	<footer>
		<img class="img-rodape" src="imagens/logo-ISK.png">
		<p class="text-rodape">&copy; Copyright IsK Soluções Tecnologicas - 2023
	</footer>
</html>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>SSA - Buscar Turma/Aluno</title>
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
				<h1>Buscar Turma/Aluno</h1>
				<hr><br><br>

				<form method="post" action="processa.php">
					<strong1>Buscar Aluno(Matricula/Nome):</strong>
					<input type="text" nome="filtro" class="campo" autofocus>
					<input type="submit" value="Pesquisar" class="button">
					<br><hr><br>

					Matricula:
					<input type="text" name="matricula" class="campo">

					Nome:
					<input type="text" name="nome" class="campo" size="45" maxlength="45" autofocus required>
					<br>

					Data de Nascimento:
					<input type="date" name="nascimento" class="campo" maxlength="8">

					Turma:
					<input type="text" name="turma" class="campo" maxlength="10">
					<br><br>
					<hr><br>

					<input type="submit" value="Salvar" class="button">
					<input type="reset" value="Limpar" class="button">
					<br><br>
				</form>		 	
			</section>
		</div>
	</body>
	<footer>
		<img class="img-rodape" src="imagens/logo-ISK.png">
		<p class="text-rodape">&copy; Copyright IsK Soluções Tecnologicas - 2023
	</footer>
</html>
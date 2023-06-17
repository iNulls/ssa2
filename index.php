<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>SSA - Login</title>
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<main>
		<body>
			<div class="caixa">
				<nav>
					<ul class="menu">
						<h1><img src="imagens/logo-SSA.png"></h1>
						<li><a href="index.php">Inicio</a></li>
					</ul>
				</nav>
					<section>
					<h1>Pagina de Login</h1>
					<hr><br><br>
					</section>
			</div>
			<form class="login" method="post" action="login.php">
				<strong>Login de Acesso</strong>
				<br><br>

				Login:
				<input type="text" name="login" class="campo" maxlength="25" size="25" required autofocus>
				<br><br>

				Senha:
				<input type="password" name="senha" class="campo" maxlength="25" size="25" required>
				<br><br>

				<input type="submit" value="Login" class="button">
			</form>

			 <?php
			    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			        $login = $_POST['login'];
			        $senha = $_POST['senha'];

			        // Conexão com o banco de dados
			   		include_once("conexao.php");

			        // Verifica se ocorreu algum erro na conexão
			        if ($conn->connect_error) {
			            die('Erro na conexão: ' . $conn->connect_error);
			        }

			        // Consulta o banco de dados para verificar o login
			        $sql = "SELECT * FROM login WHERE login = '$login' AND senha = '$senha'";
			        $result = $conn->query($sql);

			        if ($result->num_rows > 0) {
			            echo "Login realizado com sucesso!";
			        } else {
			            echo "Login falhou. Verifique seu email e senha.";
			        }

			        // Fecha a conexão com o banco de dados
			        $conn->close();
			    	}
   				 ?>
		</body>	
	</main>
	<footer>
		<img class="img-rodape" src="imagens/logo-ISK.png">
		<p class="text-rodape">&copy; Copyright IsK Soluções Tecnologicas - 2023
	</footer>
</html>
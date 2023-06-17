<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from alunos where nome like '%$filtro%' or turma like '%$filtro%' order by nome";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);


?>

<?php

while($exibirRegistros = mysqli_fetch_array($consulta)) {
$matricula = $exibirRegistros[1];
$nome = $exibirRegistros[2];
$turma = $exibirRegistros[4];
$nascimento = $exibirRegistros[3];

	echo "<article>";

	echo "$matricula";
	echo "$nome";
	echo "$turma";
	echo "$nascimento";
					

	echo "</article>";
}

	mysqli_close($conexao);

?>
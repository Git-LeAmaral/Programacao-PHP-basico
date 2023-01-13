<!DOCTYPE html>
<html>
	<head>
		<meta chasrset="utf-8" />
		<title>Curso PHP</title>
	</head>
	<body>

		<?php

			$funcionarios = array(
				array('nome' => 'João', 'salario' => 2500),
				array('nome' => 'Maria', 'salario' => 3000),
				array('nome' => 'Julia', 'salario' => 1500)
			);

			echo '<pre>';
			print_r($funcionarios);
			echo '</pre>';
			
			foreach ($funcionarios as $idx => $funcionario) {
				
				foreach ($funcionario as $idx2 => $valor) {
					echo "$idx2 - $valor <br/>";
				}
				echo '<hr/>';
			}
			
		?>

	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta chasrset="utf-8" />
		<title>Curso PHP</title>
	</head>
	<body>

		<?php
			
			$nome = 'Leandro Amaral';
			$idade = 20;
			$atividade_preferida = 'jogar futebol';
			$cor = 'Azul';

			//operador .

			echo 'Olá '. $nome .', notei que você tem '. $idade .' anos e tem um carro turbo, e também gosta de ' . $atividade_preferida . ' ';

			//aspas duplas ""
			echo '<hr />';

			echo "Olá $nome, notei que você gosta de $cor e tem $idade anos e tem um carro turbo, e também gosta de $atividade_preferida";
			

		?>

	</body>
</html>
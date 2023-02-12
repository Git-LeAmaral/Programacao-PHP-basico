<!DOCTYPE html>
<html>
	<head>
		<meta chasrset="utf-8" />
		<title>Curso PHP</title>
	</head>
	<body>
		<?php
			
			//string
			$nome = 'Leandro Amaral';

			//int
			$idade = 35;

			//float
			$peso = 110.4;

			//boolean
			$fumante_sn = false; //(true =1) || (false = vazio)


		?>

		<h1>Ficha cadastral</h1>
		<br />
		<p>Nome: <?= $nome ?></p>
		<p>Idade: <?= $idade ?></p>
		<p>Peso: <?= $peso ?></p>
		<p>Fumante: <?= $fumante_sn ?></p>

	</body>
</html>